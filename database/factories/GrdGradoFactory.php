<?php

namespace Database\Factories;

use App\Models\grd_grado;
use Illuminate\Database\Eloquent\Factories\Factory;


class GrdGradoFactory extends Factory
{
    protected $model = grd_grado::class;
  
    public function definition()
    {
        return [
            'grd_nombre' => $this->faker->unique()->bothify('#o Grado')
        ];
    }
}
