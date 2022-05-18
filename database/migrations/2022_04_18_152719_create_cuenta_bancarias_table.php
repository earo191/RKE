<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_bancarias', function (Blueprint $table) {
            $table->id();
            $table->string('Nro_Cuenta', 20);
            $table->Integer('Tipo_cuenta');
            $table->string('cedula');
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
        Schema::dropIfExists('cuenta_bancarias');
    }
}
