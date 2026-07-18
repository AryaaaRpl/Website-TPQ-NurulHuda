<?php
namespace App\Http\Controllers;
use App\Models\Applicant;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomeController {
 public function index() { $items=Content::where('status','published')->orderBy('sort_order')->get()->groupBy('type'); return view('home',['gallery'=>$items->get('gallery',collect()),'extras'=>$items->get('extracurricular',collect()),'facilities'=>$items->get('facility',collect())]); }
 public function fasilitas() { $facilities=Content::where('type','facility')->where('status','published')->orderBy('sort_order')->get(); return view('fasilitas',['facilities'=>$facilities]); }
 public function ekskul() { $extras=Content::where('type','extracurricular')->where('status','published')->orderBy('sort_order')->get(); return view('ekskul',['extras'=>$extras]); }
 public function register(Request $request) { if ($request->isMethod('post')) { $data=$request->validate(['name'=>['required','string','max:160'],'parent_name'=>['required','string','max:160'],'phone'=>['required','string','max:30'],'age'=>['required','integer','between:3,18'],'program'=>['required','in:jilid,tahfidz']]); $data['registration_number']='PPDB-'.now()->format('ymd').'-'.strtoupper(Str::random(4)); $a=Applicant::create($data); return back()->with('registration_success',"Pendaftaran berhasil dikirim. Nomor pendaftaran: {$a->registration_number}"); } $facilities=Content::where('type','facility')->where('status','published')->orderBy('sort_order')->get()->take(3); return view('ppdb',['facilities'=>$facilities]); }
}
