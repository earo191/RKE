<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationCuentabancaria extends FormRequest
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
            'nro_cuenta'=> 'required|digits:16',
            
        ];
    }

    public function messages ()
    {
        return [
            'nro_cuenta.required' => 'El campo nro_cuenta es requerido',
            'nro_cuenta.digits' => 'nro_cuenta no puede ser menor o mayor a 16 digitos'
        ];

    }
}
