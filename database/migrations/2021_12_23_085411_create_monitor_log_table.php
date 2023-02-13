<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_monitor_log', function (Blueprint $table) {
            $table->id();
            $table->string('monitor_unique',25);
            $table->string('monitor_name');
            $table->string('monitor_old_number');
            $table->string('monitor_old_location');
            $table->string('monitor_old_type');
            $table->string('monitor_old_size');
            $table->string('monitor_old_user');
            $table->string('monitor_old_condition');
            $table->string('monitor_new_number');
            $table->string('monitor_new_location');
            $table->string('monitor_new_type');
            $table->string('monitor_new_size');
            $table->string('monitor_new_user');
            $table->string('monitor_new_condition');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris_monitor_log');
    }
}
