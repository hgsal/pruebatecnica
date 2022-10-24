<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\grd_grado;
use App\Models\alm_alumno;
use App\Models\mat_materia;
use Illuminate\Support\Arr;
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
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $materias = $this->call([MatMateriaSeeder::class]);
        grd_grado::factory(10)->create();
        alm_alumno::factory(50)->create();

        $grades = grd_grado::all();
            foreach($grades as $grade){
                $materias = mat_materia::get('id')->random(5);
                $materias = Arr::pluck($materias, 'id');
                $grade->materias()->sync($materias);

            }
    }
}
