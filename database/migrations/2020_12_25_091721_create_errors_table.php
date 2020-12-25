<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('error_type_id');
            $table->unsignedBigInteger('error_message_id');
            $table->unsignedBigInteger('user_error_message_id');
            $table->boolean('active');
            $table->foreign('error_type_id')->references('id')->on('errors_types');
            $table->foreign('error_message_id')->references('id')->on('error_messages');
            $table->foreign('user_error_message_id')->references('id')->on('error_messages_for_users');
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
        Schema::dropIfExists('errors');
    }
}
