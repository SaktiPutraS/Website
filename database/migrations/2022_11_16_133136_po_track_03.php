<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PoTrack03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_track_03', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_nomor')->nullable();
            $table->date('tanggal_terima_finance')->nullable();
            $table->date('tanggal_serah_gl')->nullable();
            $table->date('tanggal_input')->nullable();
            $table->string('nama_input')->nullable();
            $table->date('tanggal_pembayaran')->nullable();
            $table->text('catatan_finance')->nullable();
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
