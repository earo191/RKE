<?php

namespace App\Http\Controllers\Recarga;

use App\Http\Controllers\Controller;
use App\Models\Recarga;
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
        $recargas= Recarga::all()->where("estatus", "=", '1');
        $esperas= Recarga::all()->where("estatus", "=", '0');
        $bancos= Banco::all();
        $users= User::all();
        return view('modulos/admin/recargas/index')->with([
            'recargas' => $recargas,
            'esperas' => $esperas,
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
