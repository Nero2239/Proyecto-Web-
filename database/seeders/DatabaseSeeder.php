<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Aquí es donde se manda a llamar a tu AcademicSeeder
        $this->call(AcademicSeeder::class);
    }
}