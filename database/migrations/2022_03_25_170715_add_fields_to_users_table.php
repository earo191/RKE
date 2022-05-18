<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('apellido')->nullable()->after('name');
            $table->string('username')->nullable()->after('apellido');
            $table->string('cedula')->nullable()->after('username');
            $table->string('foto')->nullable()->after('cedula');
            $table->string('phone')->nullable()->after('foto');
            $table->bigInteger('pais_id')->nullable()->constrained()->unsigned()->after('phone');

            $table->string('referral_code', 7)->unique();
            $table->unsignedBigInteger('referred_by')->nullable();

            $table->foreign('referred_by')->references('id')->on('users');

            $table->foreign("pais_id")->references("id")->on("pais")
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['pais_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['apellido', 'username', 'cedula', 'foto', 'pais_id']);
        });
    }
}
