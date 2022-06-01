<?php

namespace App\Http\Controllers\Tasa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasa; 
use Carbon\Carbon;

class TasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasa = Tasa::orderBy('created_at','DESC')->get();
        // return $tasa;
        return view('modulos/admin/tasa/index')->with([
            'tasa' => $tasa
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
        // return $request->all();
        $tasa_rke = new Tasa;

        $tasa_rke->tasa_oficial = $request->dolar_api;
        $tasa_rke->porcentaje = $request->porcentaje_dolar;
        $tasa_rke->tasa_RKE = $request->dolar_rke;
        $tasa_rke->fecha = Carbon::now();

        $tasa_rke->save();

        Return redirect()->route('tasa.index');
        

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
