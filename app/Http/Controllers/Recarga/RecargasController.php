<?php

namespace App\Http\Controllers\Recarga;

use App\Http\Controllers\Controller;
use App\Models\Recarga;
use App\Models\Banco;
use App\Models\Monedero;

use App\Models\SaldoCongelado;
use App\User;

use Illuminate\Http\Request;

class RecargasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $esperas= Recarga::all()->where("estatus", "=", '0');
        $bancos= Banco::all();
        $users= User::all();
        return view('modulos/admin/recargas/index')->with([
            'esperas' => $esperas,
            'bancos' => $bancos,
            'users' => $users]);
    }
    
    public function rechazadas()
    {
        $recargas= Recarga::all()->where("estatus", "=", '3');
        $bancos= Banco::all();
        $users= User::all();
        return view('modulos/admin/recargas/rechazadas')->with([
            'recargas' => $recargas,
            'bancos' => $bancos,
            'users' => $users]);
    }
    public function aceptadas()
    {
        $recargas= Recarga::all()->where("estatus", "=", '1');
        $bancos= Banco::all();
        $users= User::all();
        return view('modulos/admin/recargas/aceptadas')->with([
            'recargas' => $recargas,
            'bancos' => $bancos,
            'users' => $users]);
    }

    public function congelar($id)
    {
        $recarga = Recarga::findOrFail($id);
        // return $recarga;
        return view('modulos/admin/recargas/congelar')->with([
            'recarga' => $recarga
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
        $user= User::where('id',$request->user_id)->get();
        $recarga= Recarga::where('id',$request->id_recarga)->get();

        $saldoCongelado = new SaldoCongelado;
        $saldoCongelado->saldo_congelado = $request->monto;
        // $saldoCongelado->fecha_recarga = $request->fecha_recarga;
        // $saldoCongelado->referencia = $request->referencia;
        $saldoCongelado->recarga_id =$recarga->first()->id;
        $saldoCongelado->usuario_id =  $user->first()->id;
       

        $saldoCongelado->save();


        $recarga[0]->estatus = '2';
        $recarga[0]->save();


        return redirect('recarga'); 
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
        $recarga = Recarga::findOrFail($id);
        $recarga->estatus = '1';
        $monedero = Monedero::where("usuario_id", "=", $recarga->usuario_id)->get();
        $monedero[0]->saldo = $monedero[0]->saldo + $recarga->monto;
        // return $monedero[0];
        $recarga->save();
        $monedero[0]->save();

        return redirect('recarga'); 

    }
    public function rechazar(Request $request, $id)
    {
        //
        $recarga = Recarga::findOrFail($id);
        $recarga->estatus = '3';
        $recarga->save();

        return redirect('recarga'); 

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
