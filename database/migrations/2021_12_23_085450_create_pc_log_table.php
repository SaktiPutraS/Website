<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_PC_log', function (Blueprint $table) {
            $table->id();
            $table->string('pc_unique',25);
            $table->string('pc_number');
            $table->string('pc_old_user');
            $table->string('pc_old_location');
            $table->string('pc_old_condition');
            $table->string('pc_old_mainboard');
            $table->string('pc_old_processor');
            $table->string('pc_old_vga');
            $table->string('pc_old_ram');
            $table->string('pc_old_hdd');
            $table->string('pc_old_ssd');
            $table->string('pc_old_os');
            $table->string('pc_new_user');
            $table->string('pc_new_location');
            $table->string('pc_new_condition');
            $table->string('pc_new_mainboard');
            $table->string('pc_new_processor');
            $table->string('pc_new_vga');
            $table->string('pc_new_ram');
            $table->string('pc_new_hdd');
            $table->string('pc_new_ssd');
            $table->string('pc_new_os');
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
        Schema::dropIfExists('inventaris_PC_log');
    }
}
