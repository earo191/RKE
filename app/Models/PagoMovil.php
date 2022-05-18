<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoMovil extends Model
{
    //



	// Relación user (n:1)
		public function reUser(){
			return $this->belongsTo('App\User','user_id');
		}
	// /Relación user (n:1)
	
	// Relación BANCO (1:1)
	public function banco(){
		return $this->belongsTo('App\Models\Banco','banco_id');
	}
	

}
