<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('r_status_id');
            $table->unsignedBigInteger('operators_id');
            $table->unsignedBigInteger('devices_id');
            $table->unsignedBigInteger('responsible_user_id');
            $table->dateTime('opend');
            $table->dateTime('closed');
            $table->string('description');
            $table->foreign('operators_id')->references('id')->on('users');
            $table->foreign('r_status_id')->references('id')->on('request_statuses');
            $table->foreign('devices_id')->references('id')->on('devices');
            $table->foreign('responsible_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('requests');
    }
}
