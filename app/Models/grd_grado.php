<?php

namespace App\Models;

use Database\Factories\GrdGradoFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class grd_grado extends Model
{
    use HasFactory;
    protected $fillable = ['grd_nombre'];

    protected static function newFactory()
    {
        return GrdGradoFactory::new();
    }

    public function alumnos()
    {
        return $this->hasMany(alm_alumno::class);
    }

    public function materias()
    {
        return $this->belongsToMany(mat_materia::class,'mxg_materiasxgrado', 'mxg_id_grd', 'mxg_id_mat')
                    ->withTimestamps();
    }
}
