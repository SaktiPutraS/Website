<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInkLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_ink_log', function (Blueprint $table) {
            $table->id();
            $table->string('ink_unique',25);
             $table->string('ink_old_code');
             $table->string('ink_old_name');
             $table->string('ink_new_code');
             $table->string('ink_new_name');
             $table->string('ink_old_qty');
             $table->string('ink_new_qty');
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
        Schema::dropIfExists('inventaris_ink_log');
    }
}
