<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maintenance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_user');
            $table->string('id_pc');
            $table->string('id_monitor');
            $table->string('check_monitor');
            $table->string('check_acc');
            $table->string('check_mainboard');
            $table->string('check_hdd');
            $table->string('check_prosessor');
            $table->string('check_ram');
            $table->string('check_jaringan');
            $table->string('clean_cpu');
            $table->string('op_os');
            $table->string('check_antivirus');
            $table->string('os_software');
            $table->string('backup_email');
            $table->date('tgl_maintenance');
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
        //
    }
}
