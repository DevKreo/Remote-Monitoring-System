<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('device_groups_id');
            $table->point('cord');
            $table->float('cord_latitude');
            $table->float('cord_longtitude');
            $table->unsignedBigInteger('device_type_id');
            $table->string('adress');
            $table->unsignedBigInteger('device_boundaries_id');
            $table->dateTime('installation_date');
            $table->dateTime('date_of_deletion');
            $table->unsignedBigInteger('device_developer_id');
            $table->boolean('mobile')->default(false);
            $table->foreign('device_developer_id')->references('id')->on('dictionaries');
            $table->foreign('device_groups_id')->references('id')->on('dictionaries');
            $table->foreign('device_boundaries_id')->references('id')->on('device_boundaries');
            $table->foreign('device_type_id')->references('id')->on('dictionaries');
            $table->decimal('performance');
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
        Schema::dropIfExists('devices');
    }
}
