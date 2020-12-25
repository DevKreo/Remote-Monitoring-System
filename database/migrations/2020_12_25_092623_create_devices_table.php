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
            $table->boolean('active');
            $table->unsignedBigInteger('device_groups_id');
            $table->point('cord');
            $table->float('cord_latitude');
            $table->float('cord_longtitude');
            $table->unsignedBigInteger('device_type_id');
            $table->string('adress');
            $table->unsignedBigInteger('device_boundaries_id');
            $table->dateTime('created');
            $table->dateTime('deleted');
            $table->unsignedBigInteger('device_developer_id');
            $table->boolean('mobile');
            $table->boolean('moveble');
            $table->foreign('device_developer_id')->references('id')->on('device_developers');
            $table->foreign('device_groups_id')->references('id')->on('device_groups');
            $table->foreign('device_boundaries_id')->references('id')->on('device_boundaries');
            $table->foreign('device_type_id')->references('id')->on('device_types');
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
