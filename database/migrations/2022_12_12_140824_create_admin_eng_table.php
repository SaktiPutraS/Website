<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminEngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pn_04_eng', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_panel');
            $table->string('capacity')->nullable();
            $table->string('voltage')->nullable();
            $table->string('ampere')->nullable();
            $table->string('3_phasa')->nullable();
            $table->string('ip')->nullable();
            $table->string('frekuensi')->nullable();
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
        Schema::dropIfExists('pn_04_eng');
    }
}
