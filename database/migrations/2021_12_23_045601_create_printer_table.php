<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePrinterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_printer', function (Blueprint $table) {
            $table->id();
            $table->string('printer_urut');
            $table->string('printer_unique',25);
            $table->string('printer_name');
            $table->string('printer_old_number');
            $table->string('printer_number');
            $table->string('printer_serial_number');
            $table->string('printer_price');
            $table->string('printer_location');
            $table->string('printer_condition');
            $table->string('printer_kind');
            $table->string('printer_type');
            $table->string('printer_buy_date');
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
        Schema::dropIfExists('inventaris_printer');
    }
}
