<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class B02PinjamBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_02_pinjambarang', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('uuid_barang');
            $table->string('pengaju');
            $table->string('divisi');
            $table->date('tgl_pinjam');
            $table->integer('lama_pinjam');
            $table->date('tgl_kembali');
            $table->string('status');
            $table->text('keterangan');
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
