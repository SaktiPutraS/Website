<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaintenanceTable extends Migration
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
            $table->string('id_pic')->nullable();
            $table->string('id_user')->nullable();
            $table->string('id_pc')->nullable();
            $table->string('id_monitor')->nullable();
            $table->string('id_printer')->nullable();
            $table->string('id_lokasi')->nullable();
            $table->string('check_monitor')->nullable();
            $table->string('clean_cpu_monitor')->nullable();
            $table->string('check_acc')->nullable();
            $table->string('check_mainboard')->nullable();
            $table->string('check_hdd')->nullable();
            $table->string('check_prosessor')->nullable();
            $table->string('check_ram')->nullable();
            $table->string('check_jaringan')->nullable();
            $table->string('op_os')->nullable();
            $table->string('check_antivirus')->nullable();
            $table->string('os_software')->nullable();
            $table->string('backup_email')->nullable();
            $table->string('check_printhead')->nullable();
            $table->string('check_tinta')->nullable();
            $table->string('clean_printer')->nullable();
            $table->date('tgl_maintenance')->nullable();
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
        Schema::dropIfExists('maintenance');
    }
}
