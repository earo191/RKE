<?php

namespace App\Http\Controllers\Trivia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trivia;
use App\Models\Pregunta;
use App\Extensions\Tools;
use App\Http\Requests\ValidationTrivia;
use Session;


class TriviaController extends Controller
{
    //
    public  function index(){
        $trivia = Trivia::all();
        return view('modulos/admin/trivia/index')->with([
            'trivias' => $trivia
        ]);
    }
    public function create()
    {
        //
        return view('template/admin/trivias/create');
    }
    public function store(ValidationTrivia $request){
            

      
        $files = $request->file('imagen');
        $nombreimg=$files->getClientOriginalName();
        $files->move('imgSystema/imgTrivia/',$nombreimg);

        $filesAudio = $request->file('audio');
        $nombreAudio=$filesAudio->getClientOriginalName();
        $filesAudio->move('musica/trivia/',$nombreAudio);
      

        $data=[
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'precio' => $request->precio,
            'hora' => $request->hora,
            'imagen' => $nombreimg,
            'audio' => $nombreAudio

        ];


        $trivia = Trivia::create($data);

       
            
        for($i=1;$i<=12;$i++){
        ${"pregunta_".$i} = new Pregunta;
        ${"pregunta_".$i}->pregunta = $request->{"pregunta_".$i};
        ${"pregunta_".$i}->respuesta_correcta = $request-> {"preg_".$i."_correcta"};
        ${"pregunta_".$i}->opcion_1 =$request->{"pregunta".$i."_op_1"};
        ${"pregunta_".$i}->opcion_2 =$request->{"pregunta".$i."_op_2"};
        ${"pregunta_".$i}->opcion_3 =$request->{"pregunta".$i."_op_3"};
        ${"pregunta_".$i}-> tiempo_respuesta = '20';
        ${"files_pregunta".$i} = $request->file("imagen_pregunta".$i);
        ${"nombre_".$i}= ${"files_pregunta".$i}->getClientOriginalName();
        ${"files_pregunta".$i}->move('imgSystema/imgPreguntas/',${"nombre_".$i});
        ${"pregunta_".$i}->imagen = ${"nombre_".$i};
        ${"pregunta_".$i}->trivia_id = $trivia->id;

        ${"pregunta_".$i}->save();
        }

        
        //Session::flash('mensaje','Proceso Efectuado Con Extito');  

        return redirect()->route('trivia.index'); 
        //return back()->withInput();
        
    }

}
