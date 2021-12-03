<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Grado;
use App\Models\GradoProfesor;
use App\Models\Profesor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AlumnoSeeder::class,
            GradoSeeder::class,
            ProfesorSeeder::class,
            GradoProfesorSeeder::class
            
        ]);
        
    }
}
