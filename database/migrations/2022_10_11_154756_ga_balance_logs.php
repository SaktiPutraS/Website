<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaBalanceLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ga_balance_logs', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_pengajuan')->nullable();
            $table->string('id_barang')->nullable();
            $table->string('id_gudang')->nullable();
            $table->integer('qty')->nullable();
            $table->string('id_user')->nullable();
            $table->string('id_divisi')->nullable();
            $table->date('tgl_pengajuan')->nullable();
            $table->text('alasan_pengajua')->nullable();
            $table->string('status_pengajua')->nullable();
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
