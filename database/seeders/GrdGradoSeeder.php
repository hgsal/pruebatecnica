<?php

namespace Database\Seeders;

use App\Models\grd_grado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrdGradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grates = [
                '1er Grado',
                '2do Grado',
                '3er Grado',
                '4to Grado',
                '5to Grado',
                '6to Grado',
                '7to Grado',
                '8to Grado',
                '9to Grado',
        ];

        foreach($grates as $grate){
            grd_grado::created([
                'name' => $grate
            ]);
        }
    }
}
