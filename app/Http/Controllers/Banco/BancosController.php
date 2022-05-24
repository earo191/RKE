<?php

namespace App\Http\Controllers\Banco;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Banco;
use App\Models\CuentaBancaria;


class BancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarioLogueado = auth()->user()->id;
        $cuentas = CuentaBancaria::all()->where("usuario_id", "=", $usuarioLogueado);
        
        return view('modulos/user/banco/index')->with([
            'cuentas' => $cuentas
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
        $usuarioLogueado = auth()->user();
        return view('modulos/user/banco/create')->with([
            'bancos' => $bancos,
            'user' => $usuarioLogueado
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
        $banco_id = Banco::where("codigo", "=", $request->codigo_banco)->get();
        $cuentaBancaria = new CuentaBancaria;
        $cuentaBancaria->cedula = $request->cedula;
        $cuentaBancaria->codigo_banco = $request->codigo_banco;
        $cuentaBancaria->nro_cuenta = $request->nro_cuenta ;
        $cuentaBancaria->tipo_cuenta = $request->tipo_cuenta;
        $cuentaBancaria->principal = $request->principal;
        $cuentaBancaria->banco_id = $banco_id[0]->id;
        $cuentaBancaria->usuario_id = auth()->user()->id;
        

        $cuentaBancaria->save();

        Return redirect()->route('banco.index');
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
        $bancos = Banco::All();
        
        $usuarioLogueado = auth()->user();
        $cuentaBancaria = CuentaBancaria::findOrFail($id);
        return view('modulos/user/banco/edit')->with([
            'bancos' => $bancos,
            'cuentaBancaria' => $cuentaBancaria,
            'user' => $usuarioLogueado
        ]);
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
        // return $request->all();
        $cuentaBancaria = CuentaBancaria::findOrFail($id);
        $banco_id = Banco::where("codigo", "=", $request->codigo_banco)->get();
        $cuentaBancaria->cedula = $request->cedula;
        $cuentaBancaria->codigo_banco = $request->codigo_banco;
        $cuentaBancaria->nro_cuenta = $request->nro_cuenta ;
        $cuentaBancaria->tipo_cuenta = $request->Tipo_cuenta;
        $cuentaBancaria->principal = $request->principal;
        $cuentaBancaria->banco_id = $banco_id[0]->id;

        $cuentaBancaria->update();

        Return redirect()->route('banco.index');
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
