<?php

namespace Database\Seeders;

use App\Models\mat_materia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
                        'Lenguaje',
                        'Matematicas',
                        'Ingles',
                        'Geografia e Historia',
                        'Biologia y Geologia',
                        'Fisica y Quimica',
                        'Educacion Fisica',
                        'Religion o Valores eticos',
                        'Plastica',
                        'Tecnologia',
                        'CPC and Speaking 4',
                        'Writing',
                        'Musica',
                        'Cultura',
                     ];  

        foreach($subjects as $subject){
            mat_materia::factory(1)->create([
                'mat_nombre' => $subject
            ]);
        }
    }
        
}
