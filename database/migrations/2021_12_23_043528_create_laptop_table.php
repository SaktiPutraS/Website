<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_laptop', function (Blueprint $table) {
            $table->id();
            $table->string('laptop_urut');
            $table->string('laptop_unique',25);
            $table->string('laptop_user');
            $table->string('laptop_name');
            $table->string('laptop_old_number');
            $table->string('laptop_number');
            $table->string('laptop_serial_number');
            $table->string('laptop_price')->nullable();
            $table->string('laptop_status');
            $table->string('laptop_condition');
            $table->string('laptop_processor');
            $table->string('laptop_vga');
            $table->string('laptop_ram');
            $table->string('laptop_hdd');
            $table->string('laptop_ssd');
            $table->string('laptop_os');
            $table->string('laptop_buy_date');
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
        Schema::dropIfExists('inventaris_laptop');
    }
}
