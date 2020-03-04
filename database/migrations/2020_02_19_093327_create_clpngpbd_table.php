<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClpngpbdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clpngpbd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('qlty_title')->nullable();
            $table->text('qlty_des')->nullable();
            $table->text('qlty_img')->nullable();
            $table->text('price_title')->nullable();
            $table->text('price_des')->nullable();
            $table->text('price_img')->nullable();
            $table->text('time_title')->nullable();
            $table->text('time_des')->nullable();
            $table->text('time_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clpngpbd');
    }
}
