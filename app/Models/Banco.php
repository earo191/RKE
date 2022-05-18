<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    //
    protected $fillable = ['codigo', 'nombre'];

    public function pagoMovil(){
        return $this->hasMany('App\Models\PagoMovil','pagomovil_id');
    }
    public function cuentaBancaria(){
        return $this->hasMany('App\Models\CuentaBancaria','cuentaBancaria_id');
    }
}
