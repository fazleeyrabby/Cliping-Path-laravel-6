<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowitworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('howitwork', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('fb_img')->nullable();
            $table->string('fb_title')->nullable();
            $table->text('desk_img')->nullable();
            $table->string('desk_title')->nullable();
            $table->text('bnf_img')->nullable();
            $table->string('bnf_title')->nullable();
            $table->text('mail_img')->nullable();
            $table->string('mail_title')->nullable();
            $table->text('unknown_img')->nullable();
            $table->string('unknown_title')->nullable();
            $table->text('time_img')->nullable();
            $table->string('time_title')->nullable();
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
        Schema::dropIfExists('howitwork');
    }
}
