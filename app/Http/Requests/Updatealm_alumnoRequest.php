<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updatealm_alumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
   
        return [
            'alm_codigo' => 'required|unique:alm_alumnos,alm_codigo' . $this->id,
            'alm_nombre' => 'required|unique:alm_alumnos,alm_nombre' . $this->id,
            'alm_edad' => 'required',
            'alm_sexo' => 'required',
            'grd_grado_id' => 'required|max:255'

        ];
    }
}
