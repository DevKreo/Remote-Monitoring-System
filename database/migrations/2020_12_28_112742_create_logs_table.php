<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('log_time');
            $table->unsignedBigInteger('devices_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('operation_type_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('devices_id')->references('id')->on('devices');
            $table->foreign('operation_type_id')->references('id')->on('dictionaries');
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
        Schema::dropIfExists('logs');
    }
}
