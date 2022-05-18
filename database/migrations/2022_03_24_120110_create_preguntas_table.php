<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {

            $table->id();
            $table->text('pregunta');
            $table->string('respuesta_correcta');
            $table->string('opcion_1', 250);
            $table->string('opcion_2', 250);
            $table->string('opcion_3', 250);
            $table->string('tiempo_respuesta', 20);
            $table->string('imagen', 250);
            $table->bigInteger('id_trivia')->unsigned();

            $table->foreign("id_trivia")->references("id")->on("trivias")
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
        Schema::dropIfExists('preguntas');
    }
}
