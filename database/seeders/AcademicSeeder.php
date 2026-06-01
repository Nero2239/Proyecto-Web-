<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\User;

class AcademicSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Usuario Base
        User::firstOrCreate(
            ['email' => 'admin@studycloud.com'],
            ['name' => 'Usuario Admin', 'password' => bcrypt('password')]
        );

        // 2. Crear Semestres
        $s5 = Semester::create(['name' => 'Quinto Semestre']);
        $s6 = Semester::create(['name' => 'Sexto Semestre']);

        // 3. Crear Materias vinculadas a sus respectivos semestres
        Subject::create(['name' => 'Base de Datos Relacionales', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Análisis de Señales', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Administración de proyectos', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Análisis de Señales', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Redes de Computadoras', 'semester_id' => $s5->id]);

        Subject::create(['name' => 'Programación Web', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Telecomunicaciones', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Sistemas Operativos', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Sistemas Embebidos', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Taller de Investigación', 'semester_id' => $s6->id]);
    }
}