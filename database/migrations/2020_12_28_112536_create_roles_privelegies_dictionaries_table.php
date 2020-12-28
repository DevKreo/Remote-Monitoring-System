<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPrivelegiesDictionariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_privelegies_dictionaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roles_id');
            $table->unsignedBigInteger('previleg_id');
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('previleg_id')->references('id')->on('dictionaries');
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
        Schema::dropIfExists('roles_privelegies_dictionaries');
    }
}
