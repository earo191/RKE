<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationTrivia extends FormRequest
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
             'nombre'=> 'required|string|max:100', 
             'fecha'=> 'required|string|max:100',
             'precio'=> 'required|string|max:100',
             'hora'=> 'required|string|max:100',
             'audio'=> 'required|max:100000',
             'imagen'=> 'required|mimes:jpeg,png,jpg',

             'pregunta_1'=> 'required|string|max:100', 
             'imagen_pregunta1'=> 'required|mimes:jpeg,png,jpg',
             'preg_1_correcta'=> 'required|string|max:100',
             'pregunta1_op_1'=> 'required|string|max:100',
             'pregunta1_op_2'=> 'required|max:10000',
             'pregunta1_op_3'=> 'required|max:10000',


            //  'pregunta_2'=> 'required|string|max:100', 
            //  'imagen_pregunta2'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_2_correcta'=> 'required|string|max:100',
            //  'pregunta2_op_1'=> 'required|string|max:100',
            //  'pregunta2_op_2'=> 'required|max:10000',
            //  'pregunta2_op_3'=> 'required|max:10000',

            //  'pregunta_3'=> 'required|string|max:100', 
            //  'imagen_pregunta3'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_3_correcta'=> 'required|string|max:100',
            //  'pregunta3_op_1'=> 'required|string|max:100',
            //  'pregunta3_op_2'=> 'required|max:10000',
            //  'pregunta3_op_3'=> 'required|max:10000',
             
            //  'pregunta_4'=> 'required|string|max:100', 
            //  'imagen_pregunta4'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_4_correcta'=> 'required|string|max:100',
            //  'pregunta4_op_1'=> 'required|string|max:100',
            //  'pregunta4_op_2'=> 'required|max:10000',
            //  'pregunta4_op_3'=> 'required|max:10000',

            //  'pregunta_5'=> 'required|string|max:100', 
            //  'imagen_pregunta5'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_5_correcta'=> 'required|string|max:100',
            //  'pregunta5_op_1'=> 'required|string|max:100',
            //  'pregunta5_op_2'=> 'required|max:10000',
            //  'pregunta5_op_3'=> 'required|max:10000',

            //  'pregunta_6'=> 'required|string|max:100', 
            //  'imagen_pregunta6'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_6_correcta'=> 'required|string|max:100',
            //  'pregunta6_op_1'=> 'required|string|max:100',
            //  'pregunta6_op_2'=> 'required|max:10000',
            //  'pregunta6_op_3'=> 'required|max:10000',

            //  'pregunta_7'=> 'required|string|max:100', 
            //  'imagen_pregunta7'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_7_correcta'=> 'required|string|max:100',
            //  'pregunta7_op_1'=> 'required|string|max:100',
            //  'pregunta7_op_2'=> 'required|max:10000',
            //  'pregunta7_op_3'=> 'required|max:10000',

            //  'pregunta_8'=> 'required|string|max:100', 
            //  'imagen_pregunta8'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_8_correcta'=> 'required|string|max:100',
            //  'pregunta8_op_1'=> 'required|string|max:100',
            //  'pregunta8_op_2'=> 'required|max:10000',
            //  'pregunta8_op_3'=> 'required|max:10000',

            //  'pregunta_9'=> 'required|string|max:100', 
            //  'imagen_pregunta9'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_9_correcta'=> 'required|string|max:100',
            //  'pregunta9_op_1'=> 'required|string|max:100',
            //  'pregunta9_op_2'=> 'required|max:10000',
            //  'pregunta9_op_3'=> 'required|max:10000',

            //  'pregunta_10'=> 'required|string|max:100', 
            //  'imagen_pregunta10'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_10_correcta'=> 'required|string|max:100',
            //  'pregunta10_op_1'=> 'required|string|max:100',
            //  'pregunta10_op_2'=> 'required|max:10000',
            //  'pregunta10_op_3'=> 'required|max:10000',

            //  'pregunta_11'=> 'required|string|max:100', 
            //  'imagen_pregunta11'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_11_correcta'=> 'required|string|max:100',
            //  'pregunta11_op_1'=> 'required|string|max:100',
            //  'pregunta11_op_2'=> 'required|max:10000',
            //  'pregunta11_op_3'=> 'required|max:10000',

            //  'pregunta_12'=> 'required|string|max:100', 
            //  'imagen_pregunta12'=> 'required|mimes:jpeg,png,jpg',
            //  'preg_12_correcta'=> 'required|string|max:100',
            //  'pregunta12_op_1'=> 'required|string|max:100',
            //  'pregunta12_op_2'=> 'required|max:10000',
            //  'pregunta12_op_3'=> 'required|max:10000',

             
        ];
    }

    public function messages ()
    {
        return [
            'imagen_pregunta2.mimes' => 'El campo imagen en la pregunta 2 debe ser de tipo jpeg,png,jpg'
        ];

    }

    public function cadena ()
    {
        

    }
}
