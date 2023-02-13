<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrinterLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_printer_log', function (Blueprint $table) {
            $table->id();
            $table->string('printer_unique',25);
            $table->string('printer_name');
            $table->string('printer_old_location');
            $table->string('printer_old_condition');
            $table->string('printer_old_kind');
            $table->string('printer_old_type');
            $table->string('printer_new_location');
            $table->string('printer_new_condition');
            $table->string('printer_new_kind');
            $table->string('printer_new_type');
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
        Schema::dropIfExists('inventaris_printer_log');
    }
}
