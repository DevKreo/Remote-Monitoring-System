<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reports_template_id');
            $table->unsignedBigInteger('reg_id');
            $table->unsignedBigInteger('report_periods_id');
            $table->string('destination');
            $table->foreign('report_periods_id')->references('id')->on('report_periods');
            $table->foreign('reports_template_id')->references('id')->on('report_templates');
            $table->foreign('reg_id')->references('id')->on('regularities');
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
        Schema::dropIfExists('sending_reports');
    }
}
