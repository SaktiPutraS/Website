<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soft_req', function (Blueprint $table) {
            $table->id();
            $table->string('soft_urut');
            $table->string('soft_req_unique',25);
            $table->string('soft_req_number');
            $table->string('soft_req_user');
            $table->tinyInteger('soft_req_user_id');
            $table->string('soft_req_divisi');
            $table->string('soft_req_location');
            $table->string('soft_req_email');
            $table->string('soft_req_email_forward');
            $table->string('soft_req_akses_fina');
            $table->string('soft_req_akses_server');
            $table->string('soft_req_akses_internet');
            $table->string('soft_req_other');
            $table->string('soft_req_reason');
            $table->string('soft_req_status');
            $table->string('soft_req_date');
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
        Schema::dropIfExists('soft_req');
    }
}
