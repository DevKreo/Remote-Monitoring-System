<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoteMonitoringSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boundary_group', function (Blueprint $table) {
            $table->increments('bg_id');
            $table->string('group_name');
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->increments('region_id');
            $table->string('region_name');
        });

        Schema::create('violation_type', function (Blueprint $table) {
            $table->increments('violation_id');
            $table->string('violation_neme');
            $table->string('description');
        });

        Schema::create('device_boundaries', function (Blueprint $table) {
            $table->increments('device_bound_id');
            $table->string('device_bound_neme');
            $table->boolean('active');
            $table->integer('region');
            $table->foreign('region')->references('region_id')->on('regions');
            $table->integer('speed_mode');
            $table->boolean('mobile');
            $table->integer('bound_group');
            $table->foreign('bound_group')->references('bg_id')->on('boundary_group');
        });

        Schema::create('device_boundary_violation_type', function (Blueprint $table) {
            $table->increments('DBVT_id');
            $table->integer('dev_bound_id');
            $table->foreign('dev_bound_id')->references('device_bound_id')->on('device_boundaries');
            $table->integer('vio_id');
            $table->foreign('vio_id')->references('violation_id')->on('violation_type');
        });

        Schema::create('SNMP_branch', function (Blueprint $table) {
            $table->increments('branch_id');
            $table->string('branch_name');
            $table->string('OID');
            $table->integer('min_value');
            $table->integer('max_value');
        });

        Schema::create('error_messages', function (Blueprint $table) {
            $table->increments('message_id');
            $table->string('message_error');
        });

        Schema::create('error_messages_for_users', function (Blueprint $table) {
            $table->increments('user_message_id');
            $table->string('message_error_for_users');
        });

        Schema::create('errors_type', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('error_name');
        });

        Schema::create('errors', function (Blueprint $table) {
            $table->increments('errors_id');
            $table->integer('error_type_id');
            $table->foreign('error_type_id')->references('type_id')->on('errors_type');
            $table->integer('error_message_id');
            $table->foreign('error_message_id')->references('message_id')->on('error_messages');
            $table->integer('user_error_message_id');
            $table->foreign('user_error_message_id')->references('user_message_id')->on('error_messages_for_users');
            $table->boolean('active');
        });

        Schema::create('request_status', function (Blueprint $table) {
            $table->increments('request_id');
            $table->string('request_status_name');
        });

        Schema::create('operation_type', function (Blueprint $table) {
            $table->increments('operation_id');
            $table->string('operation_type_name');
        });

        Schema::create('previlegies', function (Blueprint $table) {
            $table->increments('previlegies_id');
            $table->string('previlegies_name');
        });

        Schema::create('device_developer', function (Blueprint $table) {
            $table->increments('developer_id');
            $table->string('developer_name');
        });

        Schema::create('device_type', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type_name');
        });

        Schema::create('device_groups', function (Blueprint $table) {
            $table->increments('group_id');
            $table->string('group_name');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name');
            $table->string('role_short_name');
        });

        Schema::create('roles_previlegies', function (Blueprint $table) {
            $table->increments('roles_previlegies_id');
            $table->integer('roles_id');
            $table->foreign('roles_id')->references('role_id')->on('roles');
            $table->integer('previleg_id');
            $table->foreign('previleg_id')->references('previleg_id')->on('previlegies');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->integer('device_group_ip');
            $table->foreign('device_group_ip')->references('group_id')->on('device_groups');
            $table->integer('roles_id');
            $table->foreign('roles_id')->references('role_id')->on('roles');
            $table->timestamp('registration_date');
        });

        Schema::create('devices', function (Blueprint $table) {
            $table->increments('device_id');
            $table->string('serial_number');
            $table->boolean('active');
            $table->integer('device_groups_id');
            $table->foreign('device_groups_id')->references('group_id')->on('device_groups');
            $table->point('cord');
            $table->float('cord_latitude');
            $table->float('cord_longtitude');
            $table->integer('device_type_id');
            $table->foreign('device_type_id')->references('type_id')->on('device_type');
            $table->string('adress');
            $table->integer('device_boundaries_id');
            $table->foreign('device_boundaries_d')->references('device_bound_id')->on('device_boundaries');
            $table->timestamp('created');
            $table->timestamp('deleted');
            $table->integer('device_developer_id');
            $table->foreign('device_developer_id')->references('developer_id')->on('device_developer');
            $table->boolean('mobile');
            $table->decimal('performance');
        });

        Schema::create('device_polls', function (Blueprint $table) {
            $table->increments('device_polls_id');
            $table->timestamp('date');
            $table->integer('devices_id');
            $table->foreign('devices_id')->references('device_id')->on('devices');
            $table->integer('violation_quantity');
            $table->integer('transition');
        });

        Schema::create('logs', function (Blueprint $table) {
            $table->increments('log_id');
            $table->timestamp('log_time');
            $table->integer('devices_id');
            $table->foreign('devices_id')->references('device_id')->on('devices');
            $table->integer('users_id');
            $table->foreign('users_id')->references('user_id')->on('users');
            $table->integer('operation_type_id');
            $table->foreign('operation_type_id')->references('operation_id')->on('operation_type');
        });


        Schema::create('requests', function (Blueprint $table) {
            $table->increments('request_id');
            $table->integer('r_status_id');
            $table->foreign('r_status_id')->references('request_id')->on('request_status');
            $table->integer('operators_id');
            $table->foreign('operators_id')->references('user_id')->on('users');
            $table->integer('devices_id');
            $table->foreign('devices_id')->references('device_id')->on('devices');
            $table->integer('responsible_user_id');
            $table->foreign('responsible_user_id')->references('user_id')->on('users');
            $table->timestamp('opend');
            $table->timestamp('closed');
            $table->string('description');
        });


        Schema::create('regularity', function (Blueprint $table) {
            $table->increments('regularity_id');
            $table->string('regularity_name');
        });
        Schema::create('report_periods', function (Blueprint $table) {
            $table->increments('report_period_id');
            $table->string('report_period_name');
        });

        Schema::create('parametrs', function (Blueprint $table) {
            $table->increments('parametr_id');
            $table->string('parametr_name');
        });

        Schema::create('reports_template', function (Blueprint $table) {
            $table->increments('template_id');
            $table->string('template_name');
            $table->integer('devices_id');
            $table->foreign('devices_id')->references('user_id')->on('devices');
            $table->integer('parametrs_id');
            $table->foreign('parametrs_id')->references('parametr_id')->on('parametrs');
        });

        Schema::create('sending_reports', function (Blueprint $table) {
            $table->increments('reports_id');
            $table->integer('reports_template_id');
            $table->foreign('reports_template_id')->references('template_id')->on('reports_template');
            $table->integer('reg_id');
            $table->foreign('reg_id')->references('regularity_id')->on('regularity');
            $table->integer('report_periods_id');
            $table->foreign('report_periods_id')->references('report_period_id')->on('report_periods');
            $table->string('destination');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
