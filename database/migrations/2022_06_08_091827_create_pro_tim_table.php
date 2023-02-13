<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('pro_tim')) {
            return;
        }else{
            Schema::create('pro_tim', function (Blueprint $table) {
                $table->id();
                $table->string('tim_id');
                $table->string('tim_nama');
                $table->string('tim_alias');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('pro_tim');
    }
}
