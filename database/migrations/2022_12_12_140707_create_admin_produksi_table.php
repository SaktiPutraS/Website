<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pn_02_produksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_panel');
            $table->string('spv');
            $table->string('wiring');
            $table->string('mekanik');
            $table->date('actual_produksi')->nullable();
            $table->text('status_komponen')->nullable();
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
        Schema::dropIfExists('pn_02_produksi');
    }
}
