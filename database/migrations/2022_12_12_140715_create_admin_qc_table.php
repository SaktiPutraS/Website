<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminQcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pn_03_qc', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_panel');
            $table->date('actual_qc_pass')->nullable();
            $table->string('catatan_hasil_qc_test')->nullable();
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
        Schema::dropIfExists('pn_03_qc');
    }
}
