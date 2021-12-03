<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     *The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model=Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'fecha_nacimiento'=>$this->faker->dateTimeBetween('-40 years', '-16 years'),
            'identidad'=>$this->faker->ean13(),
            'grado'=>$this->faker->numberBetween($min = 1, $max = 6),
            'seccion'=>$this->faker->randomElement($array = array ('A','B','C')),
            'jornada'=>$this->faker->randomElement($array = array ('M','V'))

        ];
    }
}
