<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardReq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hard_req', function (Blueprint $table) {
            $table->id();
            $table->string('hard_req_unique',25);
            $table->string('hard_req_urut');
            $table->string('hard_req_name');
            $table->string('hard_req_number');
            $table->string('hard_req_user');
            $table->tinyInteger('hard_req_user_id');
            $table->string('hard_req_divisi');
            $table->string('hard_req_location');
            $table->string('hard_req_referensi')->nullable();
            $table->string('hard_req_mainboard')->nullable();
            $table->string('hard_req_processor')->nullable();
            $table->string('hard_req_memory')->nullable();
            $table->string('hard_req_hdd')->nullable();
            $table->string('hard_req_ssd')->nullable();
            $table->string('hard_req_casing')->nullable();
            $table->string('hard_req_vga')->nullable();
            $table->string('hard_req_keyboard')->nullable();
            $table->string('hard_req_mouse')->nullable();
            $table->string('hard_req_printer')->nullable();
            $table->string('hard_req_other')->nullable();
            $table->string('hard_req_alasan');
            $table->string('hard_req_price')->nullable();
            $table->string('hard_req_status')->nullable();
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
        Schema::table('hard_req', function (Blueprint $table) {
            //
        });
    }
}
