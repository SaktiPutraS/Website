<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketing', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_user');
            $table->string('ticket_type');
            $table->string('ticket_judul');
            $table->string('ticket_detail');
            $table->string('ticket_filename');
            $table->string('ticket_filepath');
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
        Schema::dropIfExists('ticketing');
    }
}
