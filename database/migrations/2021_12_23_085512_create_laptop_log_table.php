<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_laptop_log', function (Blueprint $table) {
            $table->id();
            $table->string('laptop_unique',25);
            $table->string('laptop_name');
            $table->string('laptop_old_user');
            $table->string('laptop_old_status');
            $table->string('laptop_old_condition');
            $table->string('laptop_old_processor');
            $table->string('laptop_old_vga');
            $table->string('laptop_old_ram');
            $table->string('laptop_old_hdd');
            $table->string('laptop_old_ssd');
            $table->string('laptop_old_os');
            $table->string('laptop_new_user');
            $table->string('laptop_new_status');
            $table->string('laptop_new_condition');
            $table->string('laptop_new_processor');
            $table->string('laptop_new_vga');
            $table->string('laptop_new_ram');
            $table->string('laptop_new_hdd');
            $table->string('laptop_new_ssd');
            $table->string('laptop_new_os');
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
        Schema::dropIfExists('inventaris_laptop_log');
    }
}
