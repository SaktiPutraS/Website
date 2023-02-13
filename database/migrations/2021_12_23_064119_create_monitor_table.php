<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMonitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_monitor', function (Blueprint $table) {
            $table->id();
            $table->string('monitor_urut');
            $table->string('monitor_unique',25);
            $table->string('monitor_name');
            $table->string('monitor_old_number');
            $table->string('monitor_number');
            $table->string('monitor_price');
            $table->string('monitor_location');
            $table->string('monitor_condition');
            $table->string('monitor_type');
            $table->string('monitor_size');
            $table->string('monitor_user');
            $table->string('monitor_buy_date');
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
        Schema::dropIfExists('inventaris_monitor');
    }
}
