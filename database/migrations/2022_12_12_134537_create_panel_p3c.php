<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanelP3c extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pn_01_p3c', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor')->nullable();
            $table->string('nomor_seri_panel')->nullable();
            $table->string('nomor_wo')->nullable();
            $table->string('nama_customer')->nullable();
            $table->string('nama_panel')->nullable();
            $table->string('cell')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->dateTime('deadline_produksi')->nullable();
            $table->dateTime('deadline_qc_pass')->nullable();
            $table->string('status_pekerjaan')->nullable();
            $table->string('jenis_panel')->nullable();
            $table->string('jenis_tegangan')->nullable();
            $table->string('tipe_panel')->nullable();
            $table->date('mfd')->nullable();
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
        Schema::dropIfExists('pn_01_p3c');
    }
}
