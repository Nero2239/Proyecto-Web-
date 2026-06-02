<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // llamar al academic seedr para cargar los datos
        $this->call(AcademicSeeder::class);
    }
}