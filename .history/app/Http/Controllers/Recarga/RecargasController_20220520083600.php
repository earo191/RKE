<?php

namespace App\Http\Controllers\Recarga;

use App\Http\Controllers\Controller;
use App\Models\Recarga;
use App\Models\Banco;
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
