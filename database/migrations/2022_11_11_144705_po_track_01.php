<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoTrack01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_track_01', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_nomor')->nullable();
            $table->string('database')->nullable();
            $table->string('nomor_ptf')->nullable();
            $table->string('nomor_po')->nullable();
            $table->string('nama_vendor')->nullable();
            $table->string('nomor_ri')->nullable();
            $table->date('tanggal_ri')->nullable();
            $table->date('tanggal_input')->nullable();
            $table->string('nama_input')->nullable();
            $table->string('nomor_invoice')->nullable();
            $table->string('nilai_invoice')->nullable();
            $table->date('tanggal_batas_bayar')->nullable();
            $table->string('nama_pengaju_invoice')->nullable();
            $table->string('catatan_procurement')->nullable();
            $table->date('tanggal_serah_pi')->nullable();
            $table->string('status_ptf')->nullable();
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
