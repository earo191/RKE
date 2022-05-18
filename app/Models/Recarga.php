<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    //
    protected $table = "recargas";
    protected $fillable = [
        'monto', 'fecha_recarga', 'banco_emisor', 'referencia', 'descripcion', 'estatus'
    ];
}
