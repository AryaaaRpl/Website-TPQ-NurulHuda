<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:160'],
            'parent_name' => ['required', 'string', 'max:160'],
            'phone' => ['required', 'string', 'max:30'],
            'age' => ['required', 'integer', 'between:3,18'],
            'program' => ['required', 'in:iqro,tahfidz'],
        ]);
        $data['registration_number'] = 'PPDB-'.now()->format('ymd').'-'.strtoupper(Str::random(4));
        $applicant = Applicant::create($data);
        return response()->json(['message' => 'Yeay! Pendaftaran berhasil dikirim.', 'data' => $applicant], 201);
    }

    public function index(Request $request)
    {
        return Applicant::query()->when($request->search, fn ($q, $search) => $q->where(fn ($q) => $q->where('name', 'like', "%{$search}%")->orWhere('registration_number', 'like', "%{$search}%")))->latest()->paginate(20);
    }

    public function updateStatus(Request $request, Applicant $applicant)
    {
        $data = $request->validate(['status' => ['required', 'in:new,verified,accepted,rejected']]);
        $applicant->update($data);
        return $applicant->fresh();
    }

    public function export()
    {
        $header = ['No. Pendaftaran', 'Nama Santri', 'Orang Tua/Wali', 'WhatsApp', 'Usia', 'Program', 'Status', 'Tanggal Daftar'];
        return response()->streamDownload(function () use ($header) {
            $out = fopen('php://output', 'w');
            fwrite($out, "\xEF\xBB\xBF");
            fputcsv($out, $header);
            Applicant::latest()->each(fn (Applicant $a) => fputcsv($out, [$a->registration_number, $a->name, $a->parent_name, $a->phone, $a->age, $a->program, $a->status, $a->created_at->format('Y-m-d H:i')]));
            fclose($out);
        }, 'ppdb-'.now()->format('Ymd-His').'.csv', ['Content-Type' => 'text/csv; charset=UTF-8']);
    }
}
