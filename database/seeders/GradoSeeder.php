<?php

namespace Database\Seeders;

use App\Models\grado;
use Illuminate\Database\Seeder;


class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grado::factory(40)->create();
    }
}
