<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_template', function (Blueprint $table) {
            $table->id();
            $table->string('template_name');
            $table->string('template_mainboard');
            $table->string('template_processor');
            $table->string('template_memory');
            $table->string('template_hdd');
            $table->string('template_ssd');
            $table->string('template_vga');
            $table->string('template_casing');
            $table->string('template_keyboard');
            $table->string('template_mouse');
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
        Schema::table('pc_template', function (Blueprint $table) {
            //
        });
    }
}
