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
        User::firstOrCreate(
            //['email' => 'pablo@gmail.com'],
            ['email' => 'admin@aguascalientes.tecnm.mx'],
            ['name' => 'Usuario Admin', 'password' => bcrypt('password')]
        );

        $s5 = Semester::create(['name' => 'Quinto Semestre']);
        $s6 = Semester::create(['name' => 'Sexto Semestre']);

        Subject::create(['name' => 'Taller de Base de Datos', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Análisis de Señales', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Administración de proyectos', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Taller de Ing de Software', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Redes de Computadoras', 'semester_id' => $s5->id]);
        Subject::create(['name' => 'Arquitectura de Computadoras', 'semester_id' => $s5->id]);

        Subject::create(['name' => 'Programación Web', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Telecomunicaciones', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Sistemas Operativos', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Tecnologías Inalambricas', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Taller de Investigación', 'semester_id' => $s6->id]);
        Subject::create(['name' => 'Emprendimiento', 'semester_id' => $s6->id]);
    }
}