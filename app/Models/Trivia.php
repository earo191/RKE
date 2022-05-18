<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    //
    protected $table = "trivias";
    protected $fillable = [
        'nombre', 'fecha', 'precio', 'hora', 'imagen', 'audio'
    ];
    public $timestamps = false;


    /* RELACIONES */
		// Relación pregunta (1:n)
			public function rePregunta(){
				return $this->hasMany('App\Models\Pregunta','id_trivia');
			}
		// /Relación pregunta (1:n)
	/* /RELACIONES */
}
