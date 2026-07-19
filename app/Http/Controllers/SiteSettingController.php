<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::firstOrCreate(
            ['id' => 1],
            [
                'total_santri' => 0,
                'total_guru' => 0,
                'years_of_experience' => 0,
                'syarat_pendaftaran' => null,
            ]
        );

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'total_santri' => ['required', 'integer', 'min:0'],
            'total_guru' => ['required', 'integer', 'min:0'],
            'years_of_experience' => ['required', 'integer', 'min:0'],
            'syarat_pendaftaran' => ['nullable', 'string', 'max:5000'],
        ]);

        $setting = SiteSetting::firstOrCreate(
            ['id' => 1],
            [
                'total_santri' => 0,
                'total_guru' => 0,
                'years_of_experience' => 0,
                'syarat_pendaftaran' => null,
            ]
        );

        $setting->update($data);

        return redirect()->route('admin.settings.edit')
            ->with('success', 'Yeay! Pengaturan web berhasil diperbarui.');
    }
}
