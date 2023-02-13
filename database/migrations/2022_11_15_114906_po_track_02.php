<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoTrack02 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_track_02', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_nomor')->nullable();
            $table->string('tanggal_terima_pi')->nullable();
            $table->date('tanggal_serah_finance')->nullable();
            $table->date('tanggal_input')->nullable();
            $table->string('nama_input')->nullable();
            $table->string('tanggal_proses_pi')->nullable();
            $table->string('nomor_faktur')->nullable();
            $table->text('catatan_pi')->nullable();
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
