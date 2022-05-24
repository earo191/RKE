<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    //

  protected $fillable = [
    'cedula', 'Nro_Cuenta', 'codigo_banco', 'Tipo_cuenta', 'principal', 'usuario_id', 
  ];
    public function Banco(){
		return $this->belongsTo('App\Models\Banco','banco_id');
	}
}
