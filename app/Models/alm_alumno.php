<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\AlmAlumnoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class alm_alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'alm_codigo',
        'alm_nombre',
        'alm_edad',
        'alm_sexo',
        'grd_grado_id',
        'alm_observacion'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AlmAlumnoFactory::new();
    }

    public function grado()
    {
        return $this->belongsTo(grd_grado::class,'grd_grado_id');
    }

  
    
}
