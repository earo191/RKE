<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Monedero;
class ValidarTranfer extends FormRequest
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
        
        $monedero = Monedero::where("usuario_id", "=",auth()->user()->id )->get();
        return [
            //
            'monto'=> 'required|max:'. $monedero[0]->saldo,
        ];
    }
    public function messages ()
    {
        $monedero = Monedero::where("usuario_id", "=",auth()->user()->id )->get();
        return [
            'monto.required' => 'El campo monto es requerido',
            'monto.max' => 'monto no puede ser mayor a '.$monedero[0]->saldo
        ];

    }
}
