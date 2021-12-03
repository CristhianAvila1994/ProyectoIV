<?php

namespace Database\Seeders;

use App\Models\GradoProfesor;
use Illuminate\Database\Seeder;

class GradoProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradoProfesor::factory(40)->create();
    }
}
