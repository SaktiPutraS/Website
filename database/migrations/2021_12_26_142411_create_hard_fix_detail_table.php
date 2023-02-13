<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardFixDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hard_fix_detail', function (Blueprint $table) {
            $table->id();
            $table->string('hard_fix_general_unique',25);
            $table->string('hard_fix_kind');
            $table->string('hard_fix_desc');
            $table->string('hard_fix_price');
            $table->string('hard_fix_vendor');
            $table->string('hard_fix_date');
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
