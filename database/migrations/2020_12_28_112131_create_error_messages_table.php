<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message_error');
            $table->string('message_for_user');
            $table->unsignedBigInteger('error_type_id');
            $table->foreign('error_type_id')->references('id')->on('dictionaries');
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
        Schema::dropIfExists('error_messages');
    }
}
