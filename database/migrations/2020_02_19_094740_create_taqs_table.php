<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taqs', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('taqs_one')->nullable();
            $table->string('taqs_two')->nullable();
            $table->string('taqs_three')->nullable();
            $table->string('taqs_four')->nullable();
            $table->string('taqs_five')->nullable();
            $table->string('taqs_six')->nullable();
            $table->string('taqs_seven')->nullable();
            $table->string('taqs_eight')->nullable();
            $table->string('taqs_nine')->nullable();
            $table->string('taqs_ten')->nullable();
            $table->string('taqs_eleven')->nullable();
            $table->string('taqs_twelve')->nullable();
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
        Schema::dropIfExists('taqs');
    }
}
