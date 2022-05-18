<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonederosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monederos', function (Blueprint $table) {
            $table->id();
            $table->string('saldo');
            $table->bigInteger('usuario_id')->unsigned();

            $table->timestamps();

            $table->foreign("usuario_id")->references("id")->on("users")
            ->onDelete("cascade")
            ->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monederos');
    }
}
