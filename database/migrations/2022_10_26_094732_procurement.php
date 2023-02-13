<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Procurement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_ppb_header', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_pengajuan')->nullable();
            $table->string('ppb_no')->nullable();
            $table->string('ppb_referensi')->nullable();
            $table->date('ppb_tgl_po')->nullable();
            $table->string('ppb_pengaju')->nullable();
            $table->string('ppb_divisi')->nullable();
            $table->string('ppb_proyek')->nullable();
            $table->string('ppb_nrp')->nullable();
            $table->string('ppb_npp')->nullable();
            $table->string('ppb_tipe')->nullable();
            $table->text('ppb_alasan')->nullable();
            $table->date('ppb_tgl_pengajuan')->nullable();
            $table->date('ppb_tgl_deadline')->nullable();
            $table->date('ppb_tgl_terima')->nullable();
            $table->string('ppb_catatan')->nullable();
            $table->string('ppb_coa')->nullable();
            $table->string('ppb_tgl_coa')->nullable();
            $table->string('ppb_status')->nullable();
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
