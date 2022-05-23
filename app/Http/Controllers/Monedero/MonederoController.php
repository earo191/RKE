<?php

namespace App\Http\Controllers\Monedero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PagoMovil;
use App\User;
use App\Models\Banco;
use App\Models\Recarga;
use App\Models\Monedero;
use App\Models\CuentaBancaria;
use Session;
class MonederoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $monedero = Monedero::where("usuario_id", "=",auth()->user()->id )->get();
        $recargas = Recarga::where("usuario_id","=",auth()->user()->id)->get();

        return view('modulos/user/monedero/index')->with([
            'recargas' =>$recargas,
            'monedero' =>$monedero[0]
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
        $bancos = Banco::All();
        $userAdmin = User::where("t_user", "=", 2)->get();
        $pagoMovil = PagoMovil::where("usuario_id","=", $userAdmin[0]->id)->get();
        return view('modulos/user/monedero/recargaPM')->with([
            'pagoMovil' => $pagoMovil,
            'bancos' => $bancos
        ]);
        
    }

    public function createTranferencia()
    {
        $bancos = Banco::All();
        $userAdmin = User::where("t_user", "=", 2)->get();
        $cuentaBancaria = CuentaBancaria::where("usuario_id","=", $userAdmin[0]->id)->get();

        return view('modulos/user/monedero/recargaTranf')->with([
            'cuentaBancaria' => $cuentaBancaria,
            'bancos' => $bancos
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $banco_admin = Banco::where('id',$request->id_banco)->get();
        $banco_emisor = Banco::where('id',$request->banco_emisor)->get();
        $recarga = new Recarga;
        $recarga->monto = $request->monto;
        $recarga->fecha_recarga = $request->fecha_recarga;
        $recarga->banco_emisor = $banco_emisor->first()->id;
        $recarga->referencia = $request->referencia;
        $recarga->descripcion = $request->descripcion;
        $recarga->estatus = 0;
        $recarga->usuario_id = auth()->user()->id;
        $recarga->banco_id =$banco_admin->first()->id;

        $recarga->save();
        Return redirect()->route('monedero.index');
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
