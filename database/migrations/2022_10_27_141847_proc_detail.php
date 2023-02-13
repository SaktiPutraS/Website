<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_ppb_detail', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_pengajuan')->nullable();
            $table->string('id_barang_detail')->nullable();
            $table->integer('ppb_qty')->nullable();
            $table->string('ppb_satuan')->nullable();
            $table->text('ppb_deskripsi')->nullable();
            $table->string('ppb_tipe')->nullable();
            $table->string('ppb_merek')->nullable();
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
