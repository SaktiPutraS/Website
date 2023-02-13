<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardFixGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hard_fix_general', function (Blueprint $table) {
            $table->id();
            $table->string('hard_urut');
            $table->string('hard_fix_general_unique',25);
            $table->string('hard_fix_number');
            $table->string('hard_fix_user');
            $table->tinyInteger('hard_fix_user_id');
            $table->string('hard_fix_divisi');
            $table->string('hard_fix_location');
            $table->string('hard_fix_hardware_unique',25);
            $table->string('hard_fix_hardware_name');
            $table->string('hard_fix_uraian');
            $table->string('hard_fix_analisa')->nullable();
            $table->string('hard_fix_penyelesaian')->nullable();
            $table->string('hard_fix_status')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
