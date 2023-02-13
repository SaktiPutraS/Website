<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProPanelHeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_panel_head', function (Blueprint $table) {
            $table->id();
            $table->integer('panel_nomor');
            $table->string('panel_seri');
            $table->string('panel_spv');
            $table->string('panel_wiring');
            $table->string('panel_mekanik');
            $table->string('panel_deadline');
            $table->string('panel_qcpass');
            $table->string('panel_status_komponen');
            $table->string('panel_cell');
            $table->string('panel_FW');
            $table->string('panel_LM');
            $table->string('panel_aktual_produksi');
            $table->string('panel_aktual_qc');
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
        Schema::dropIfExists('pro_panel_head');
    }
}
