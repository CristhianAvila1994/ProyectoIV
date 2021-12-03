<?php

namespace Database\Factories;

use App\Models\GradoProfesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradoProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grado_id'=>$this->faker->numberBetween($min = 1, $max = 40),
            'profesor_id'=>$this->faker->numberBetween($min = 1, $max = 40)
        ];
    }
}
