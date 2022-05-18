<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model

{
    /* INICIALES */
		protected $table = "preguntas";
		protected $fillable = ['id','pregunta','respuesta_correcta','opcion_1','opcion_2','opcion_3','tiempo_respuesta'];
		protected $with = ['reTrivia:id'];
        
        public $timestamps = false;
		
	

	/* /INICIALES */


    /* RELACIONES */

		// Relación trivia (n:1)
			public function reTrivia(){
				return $this->belongsTo('App\Models\Trivia','trivia_id');
			}
		// /Relación trivia (n:1)
}
