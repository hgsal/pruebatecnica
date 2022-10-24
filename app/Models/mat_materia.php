<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\MatMateriaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mat_materia extends Model
{
    use HasFactory;
    protected $fillable = ['mat_nombre'];

    protected static function newFactory()
    {
        return MatMateriaFactory::new();
    }

    public function grados()
    {
        return $this->belongsToMany(grd_grado::class,'mxg_materiasxgrado',  'mxg_id_mat', 'mxg_id_grd')
                    ->withTimestamps();
    }
}
