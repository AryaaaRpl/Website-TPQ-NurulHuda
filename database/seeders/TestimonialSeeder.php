<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Ibu Fatimah Zahra',
            'role' => 'Ibu dari Ahmad Rafi (Kelas Tahfidz)',
            'content' => 'Alhamdulillah, anak saya sudah hafal Juz 30 dalam 6 bulan. Para ustadz sangat sabar dan metode pengajarannya luar biasa. Sangat direkomendasikan!',
            'rating' => 5,
            'avatar_letter' => 'F',
            'status' => 'published',
            'sort_order' => 1,
        ]);

        Testimonial::create([
            'name' => 'Bapak Ridwan Santoso',
            'role' => 'Ayah dari Aisyah Nur (Kelas Iqro)',
            'content' => 'Putri kami yang tadinya belum bisa membaca huruf hijaiyah, kini sudah lancar membaca Al-Qur\'an. Lingkungannya Islami dan menyenangkan untuk anak.',
            'rating' => 5,
            'avatar_letter' => 'R',
            'status' => 'published',
            'sort_order' => 2,
        ]);

        Testimonial::create([
            'name' => 'Ibu Sari Dewi',
            'role' => 'Ibu dari Yusuf & Maryam (Kajian Anak)',
            'content' => 'Kedua anak saya semakin baik akhlak dan adabnya sejak bergabung. Kajian anak-anaknya sangat menarik dan anak-anak tidak pernah mau absen.',
            'rating' => 5,
            'avatar_letter' => 'S',
            'status' => 'published',
            'sort_order' => 3,
        ]);
    }
}
