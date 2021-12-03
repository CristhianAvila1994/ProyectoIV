<?php

namespace Database\Seeders;

use App\Models\GradoProfesor;
use App\Models\Profesor;
use Illuminate\Database\Seeder;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::factory(40)->create();
    
    }
}
