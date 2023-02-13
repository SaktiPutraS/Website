<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_PC', function (Blueprint $table) {
            $table->id();
            $table->string('pc_urut');
            $table->string('pc_unique',25);
            $table->string('pc_user');
            $table->string('pc_old_number');
            $table->string('pc_number');
            $table->string('pc_price');
            $table->string('pc_location');
            $table->string('pc_condition');
            $table->string('pc_mainboard');
            $table->string('pc_processor');
            $table->string('pc_vga');
            $table->string('pc_ram');
            $table->string('pc_hdd');
            $table->string('pc_ssd');
            $table->string('pc_os');
            $table->string('pc_buy_date');
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
        Schema::dropIfExists('inventaris_PC');
    }
}
