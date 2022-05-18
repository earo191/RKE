<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriviaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trivia_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('trivia_id')->unsigned();

            $table->foreign("usuario_id")->references("id")->on("users")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreign("trivia_id")->references("id")->on("trivias")
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
        Schema::dropIfExists('trivia_user');
    }
}
