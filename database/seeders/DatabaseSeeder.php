<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Dea Cantikk (admin)',
            'email' => 'dea@tpqnurulhuda.test',
            'password' => 'admin123',
            'is_admin' => true,
        ]);

        Testimonial::create([
            'name' => 'Bunda Ameera',
            'role' => null,
            'content' => 'Assalamualaikum warahmatullahi wabarakatuh. Saya adalah wali santri dari TPQ Nurul Huda Pandan. Alhamdulillah, sejak anak saya belajar di sini, saya melihat banyak perubahan positif. Anak saya dibimbing oleh ustaz dan ustazah yang berpengalaman, sabar, dan penuh perhatian sehingga semakin memahami ilmu agama, rajin beribadah, serta memiliki akhlak yang lebih baik. Lingkungan TPQ yang nyaman dan asri juga membuat anak betah belajar. Terima kasih kepada seluruh ustaz dan ustazah TPQ Nurul Huda Pandan. Bagi Ayah dan Bunda, jangan ragu untuk mendaftarkan putra-putrinya di TPQ Nurul Huda Pandan. Wassalamualaikum warahmatullahi wabarakatuh.',
            'rating' => 5,
            'avatar_letter' => 'BA',
            'status' => 'published',
            'sort_order' => 1,
        ]);

        Testimonial::create([
            'name' => 'Bu Novi',
            'role' => 'Ibunda Dari Adisty',
            'content' => 'Assalamualaikum warahmatullahi wabarakatuh. Sebagai wali santri, saya sangat bersyukur telah mempercayakan anak saya belajar di TPQ Nurul Huda. Alhamdulillah, sejak belajar di sini anak saya menjadi lebih semangat mengaji, rajin beribadah, dan memiliki akhlak yang lebih baik. Para ustaz dan ustazah sangat sabar, perhatian, serta membimbing anak-anak dengan penuh keikhlasan. Terima kasih kepada seluruh keluarga besar TPQ Nurul Huda. Semoga TPQ Nurul Huda terus menjadi tempat yang penuh keberkahan dan mencetak generasi yang cinta Al-Quran. Wassalamualaikum warahmatullahi wabarakatuh.',
            'rating' => 5,
            'avatar_letter' => 'BN',
            'status' => 'published',
            'sort_order' => 2,
        ]);

        Testimonial::create([
            'name' => 'Ayah Wirda Almira',
            'role' => null,
            'content' => 'Assalamualaikum warahmatullahi wabarakatuh. Perkenalkan, saya adalah wali santri Wirda Almira Salsabila, kelas Al-Qur an 1 di TPQ Nurul Huda. Menurut saya, TPQ Nurul Huda merupakan tempat belajar Al-Qur an yang sangat baik. Para ustaz dan ustazah membimbing anak-anak dengan sabar, sehingga mereka belajar dengan nyaman, semangat, dan semakin baik dalam memahami ilmu agama. Bagi Ayah dan Bunda yang sedang mencari tempat mengaji untuk putra-putrinya, jangan ragu untuk mendaftarkannya di TPQ Nurul Huda. Insyaallah, anak-anak akan mendapatkan pendidikan agama yang baik dan tumbuh menjadi pribadi yang berakhlak mulia. Terima kasih. Wassalamualaikum warahmatullahi wabarakatuh.',
            'rating' => 5,
            'avatar_letter' => 'A',
            'status' => 'published',
            'sort_order' => 3,
        ]);
    }
}
