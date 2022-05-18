<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    //
    public function Banco(){
		return $this->belongsTo('App\Models\Banco','banco_id');
	}
}
