<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInkReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_ink_report', function (Blueprint $table) {
            $table->id();
            $table->string('ink_unique',25);
            $table->string('ink_user');
            $table->string('ink_code');
            $table->string('ink_name');
            $table->string('ink_qty_old');
            $table->string('ink_qty_new');
            $table->string('ink_printer');
            $table->string('ink_printer_unique',25);
            $table->string('ink_desc');
            $table->string('ink_status');
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
        Schema::dropIfExists('inventaris_ink_report');
    }
}
