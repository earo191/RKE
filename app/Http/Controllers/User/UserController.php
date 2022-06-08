<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $pais = Pais::where("id", "=", $user->pais_id)->get();
        $paices = Pais::all();
        // return $pais[0];
        return view('modulos/user/user/perfil')->with([
            'user' => $user,
            'paices' => $paices,
            'pai' => $pais
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
        // $files = $request->file("foto");
        // $nombreimg=$files->getClientOriginalName();
        // // return $nombreimg;
        // $files->move('imgSystema/imgUsers/',$nombreimg);
        // $user = User::findOrFail($id);
        // // return $request->foto;

        $user = User::findOrFail($id);


        if($request->hasFile("foto")){

            $files = $request->file("foto");
            $nombreimg=$files->getClientOriginalName();
            
            $files->move('imgSystema/imgUsers/',$nombreimg);
            
            
            
            // $user->save();   
            $user->update(['foto'=>$nombreimg]);     
            
        }

        
        
        $data=[
            // 'foto' => $nombreimg,
            'name' => $request->name,
            'apellido' => $request->apellido,
            // 'username' => $request->username,
            'cedula' => $request->cedula,
            'phone' => $request->phone,
            'pais_id' => $request->pais_id,
            'email' => $user->email,


        ];

        $user->update($data);
        
        

        // return $request->all();
        $user->update($request->all());
        // return $user;


        return redirect()->route('usuario.index');

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
