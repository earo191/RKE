<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoCongeladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_congelados', function (Blueprint $table) {
            $table->id();
            $table->string('saldo_congelado');
            $table->bigInteger('recarga_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();

            $table->foreign("recarga_id")->references("id")->on("recargas")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("usuario_id")->references("id")->on("users")
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
        Schema::dropIfExists('saldo_congelados');
    }
}
