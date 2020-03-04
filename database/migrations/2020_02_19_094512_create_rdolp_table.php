<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdolpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdolp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100)->nullable();
            $table->string('bnb_title',60)->nullable();
            $table->string('bnb_des',191)->nullable();
            $table->text('bnb_img')->nullable(); 
            $table->string('desk_title',60)->nullable();
            $table->string('desk_des',191)->nullable();
            $table->text('desk_img')->nullable(); 
            $table->string('taddy_title',60)->nullable();
            $table->string('taddy_des',191)->nullable();
            $table->text('taddy_img')->nullable();
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
        Schema::dropIfExists('rdolp');
    }
}
