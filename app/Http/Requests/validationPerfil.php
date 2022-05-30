<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationPerfil extends FormRequest
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
            'phone'=> 'required|integer',
            'cedula'=> 'required|integer',
            'name'=> 'required|string|max:20',
            'username'=> 'required|string|max:10',
            'apellido'=> 'required|string|max:20',
            
        ];
    }

    public function messages ()
    {
        return [
            'phone.integer' => 'El campo telefono solo puede ser numerico',
            'phone.required' => 'El campo telefono es requerido',
            // 'phone.max' => 'El campo telefono no puede tener mas de 11 caracteres',
            'cedula.integer' => 'El campo cedula solo puede ser numerico',
            'cedula.required' => 'El campo cedula es requerido',
            // 'cedula.max' => 'El campo cedula no puede tener mas de 8 caracteres',
            'name.required' => 'El campo nombre es requerido',
            'name.max' => 'El campo nombre no puede tener mas de 20 caracteres',
            'username.required' => 'El campo username es requerido',
            'username.max' => 'El campo username no puede tener mas de 10 caracteres',
            'username.unique' => 'El username ya esta en uso',
            'apellido.required' => 'El campo apellido es requerido',
            'apellido.max' => 'El campo apellido no puede tener mas de 20 caracteres',
        ];

    }
}
