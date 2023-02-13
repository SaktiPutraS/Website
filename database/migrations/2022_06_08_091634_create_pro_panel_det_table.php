<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProPanelDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_panel_det', function (Blueprint $table) {
            $table->id();
            $table->integer('panel_nomor');
            $table->string('panel_seri');
            $table->string('panel_nama');
            $table->string('panel_pelanggan');
            $table->string('panel_proyek');
            $table->string('panel_status_pekerjaan');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_panel_det');
    }
}
