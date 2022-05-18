<?php

namespace App\Http\Controllers\PagoMovil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PagoMovil;
use App\User;
use App\Models\Banco;

class PagoMovilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        //
        $usuarioLogueado = auth()->user()->id;
        $pagomovil = PagoMovil::all()->where("usuario_id", "=", $usuarioLogueado);
        return view('modulos/user/pagomovil/index')->with([
            'pagomovils' => $pagomovil
        ]);
    }
    public function create(){
        $bancos = Banco::All();
        $usuarioLogueado = auth()->user();
        // return $usuarioLogueado;
        return view('modulos/user/pagomovil/create')->with([
            'bancos' => $bancos,
            'user' => $usuarioLogueado
        ]);
    }
    
    public function store(Request $request){
        $user= User::where('id',auth()->user()->id)->get();
        $banco= Banco::where('id',$request->banco)->get();
        $pagoMovil = new PagoMovil;
        $pagoMovil->cedula = $request->cedula;
        $pagoMovil->telefono = $request->telefono;
        $pagoMovil->rif = $request->rif;
        $pagoMovil->principal = $request->principal;
        $pagoMovil->usuario_id = $user->first()->id;
        $pagoMovil->Banco_id = $banco->first()->id;

        $pagoMovil->save();
        Return redirect()->route('pagomovil.index');
    }

    public function update(){
        
    }
}
