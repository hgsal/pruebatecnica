<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updategrd_gradoRequest extends FormRequest
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
            'grd_nombre' => 'required|max:100|unique:grd_grados,grd_nombre,' . $this->grado->id
        ];
    }
}