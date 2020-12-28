<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceBoundariyViolatationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_boundariy_violatation_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dev_bound_id');
            $table->foreign('dev_bound_id')->references('id')->on('device_boundaries');
            $table->unsignedBigInteger('vio_id');
            $table->foreign('vio_id')->references('id')->on('violation_types');
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
        Schema::dropIfExists('device_boundariy_violatation_types');
    }
}
