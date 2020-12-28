<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceBoundariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_boundaries', function (Blueprint $table) {
            $table->id();
            $table->string('device_bound_neme');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('dictionaries');
            $table->integer('speed_mode')->default(0);
            $table->enum('movement_states',['moveble','mobile']);
            $table->unsignedBigInteger('bound_group_id');
            $table->foreign('bound_group_id')->references('id')->on('dictionaries');
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
        Schema::dropIfExists('device_boundaries');
    }
}
