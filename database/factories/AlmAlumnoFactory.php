<?php

namespace Database\Factories;

use App\Models\alm_alumno;
use App\Models\grd_grado;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alm_alumno>
 */
class AlmAlumnoFactory extends Factory
{

    protected $model = alm_alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alm_codigo' => $this->faker->unique()->bothify('?#####-2022'), 
            'alm_nombre' => $this->faker->unique()->name,
            'alm_edad' => $this->faker->numberBetween($min=7, $max=14),
            'alm_sexo' => $this->faker->randomElement($arr = array('Femenino','Masculino')),
            'grd_grado_id' => grd_grado::all()->random()->id,
            'alm_observacion' => $this->faker->sentence()
        ];
    }
}
