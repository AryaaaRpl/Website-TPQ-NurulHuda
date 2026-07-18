<?php

namespace Database\Seeders;

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
    }
}
