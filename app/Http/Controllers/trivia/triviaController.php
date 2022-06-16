<?php

namespace App\Http\Controllers\trivia;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationTrivia;
use App\Models\Pregunta;
use App\Models\Trivia;
use Illuminate\Http\Request;

class triviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $trivia = Trivia::all();

        if (auth()->user()->t_user == 2) {

            return view('modulos/admin/trivia/index')->with([
                'trivias' => $trivia,
            ]);
        } else {
            return view('modulos/user/trivia/index')->with([
                'trivias' => $trivia,
            ]);
        }

    }

    public function list(){
        $trivia = Trivia::all();
        return view('modulos/admin/trivia/list')->with([
            'trivias' => $trivia,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modulos/admin/trivia/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        // return $request->all();


        $files = $request->file('imagen');
        $nombreimg = $files->getClientOriginalName();
        $files->move('imgSystema/imgTrivia/', $nombreimg);

        $filesAudio = $request->file('audio');
        $nombreAudio = $filesAudio->getClientOriginalName();
        $filesAudio->move('musica/trivia/', $nombreAudio);

        $data = [
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'precio' => $request->precio,
            'hora' => $request->hora,
            'imagen' => $nombreimg,
            'audio' => $nombreAudio,

        ];

        $trivia = Trivia::create($data);

        for ($i = 1; $i <= 1; $i++) {
            ${"pregunta_" . $i} = new Pregunta;
            ${"pregunta_" . $i}->pregunta = $request->{"pregunta_" . $i};
            ${"pregunta_" . $i}->respuesta_correcta = $request->{"preg_" . $i . "_correcta"};
            ${"pregunta_" . $i}->opcion_1 = $request->{"pregunta" . $i . "_op_1"};
            ${"pregunta_" . $i}->opcion_2 = $request->{"pregunta" . $i . "_op_2"};
            ${"pregunta_" . $i}->opcion_3 = $request->{"pregunta" . $i . "_op_3"};
            ${"pregunta_" . $i}->tiempo_respuesta = '20';
            ${"files_pregunta" . $i} = $request->file("imagen_pregunta" . $i);
            ${"nombre_" . $i} = ${"files_pregunta" . $i}->getClientOriginalName();
            ${"files_pregunta" . $i}->move('imgSystema/imgPreguntas/', ${"nombre_" . $i});
            ${"pregunta_" . $i}->imagen = ${"nombre_" . $i};
            ${"pregunta_" . $i}->id_trivia = $trivia->id;


            ${"pregunta_" . $i}->save();
        }

        //Session::flash('mensaje','Proceso Efectuado Con Extito');

        return redirect()->route('trivia.index');
        //return back()->withInput();

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('modulos/user/trivia/sala', [
            'trivia' => Trivia::findOrFail($id),
            'pregunta' =>Pregunta::all()->where('trivia_id' , $id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
