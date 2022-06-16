<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaldoCongelado extends Model
{
    //
    protected $fillable = [
		'saldo_congelado', 'recarga_id', 'usuario_id', 
	  ];

}
