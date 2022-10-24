<?php

namespace Database\Factories;

use App\Models\mat_materia;
use Illuminate\Database\Eloquent\Factories\Factory;


class MatMateriaFactory extends Factory
{
    protected $model = mat_materia::class;
    
    public function definition()
    {
        return [
            'mat_nombre' => ''
        ];
    }
}
