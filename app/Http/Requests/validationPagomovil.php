<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationPagomovil extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'banco'=> 'required', 
            'codigo_telefono'=> 'required',
            'telefono'=> 'required|digits:7',
            // 'rif'=> 'max:11',
            'principal'=> 'required'
        ];
    }

    public function messages ()
    {
        return [
            'telefono.required' => 'El campo telefono es requerido',
            'telefono.digits' => 'El campo telefono no puede tener mas de 7 digitos',
            'rif.max' => 'El campo rif no puede tener mas de 11 caracteres',
        ];

    }
}
