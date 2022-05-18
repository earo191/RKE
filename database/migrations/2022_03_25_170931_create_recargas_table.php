<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->string('monto');
            $table->date('fecha_recarga');
            $table->string('banco_emisor');
            $table->string('referencia');
            $table->string('descripcion');
            $table->string('estatus');
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('banco_id')->unsigned();

            $table->foreign("usuario_id")->references("id")->on("users")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("banco_id")->references("id")->on("bancos")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recargas');
    }
}
