<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoMovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_movils', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('telefono');
            $table->string('rif')->nullable();
            $table->integer('principal');
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
        Schema::dropIfExists('pago_movils');
    }
}
