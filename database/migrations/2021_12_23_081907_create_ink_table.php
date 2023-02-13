<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_ink', function (Blueprint $table) {
            $table->id();
             $table->string('ink_unique',25);
             $table->string('ink_code');
             $table->string('ink_name');
             $table->string('ink_qty');
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
        Schema::dropIfExists('inventaris_ink');
    }
}
