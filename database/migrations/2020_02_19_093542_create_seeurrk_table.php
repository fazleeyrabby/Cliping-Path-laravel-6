<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeeurrkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeurrk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('dscrptn')->nullable();
            $table->text('bnb_img')->nullable();
            $table->text('clock_img')->nullable();
            $table->text('desk_img')->nullable();
            $table->text('fb_img')->nullable();
            $table->text('mail_img')->nullable();
            $table->text('pen_img')->nullable();
            $table->text('polo_img')->nullable();
            $table->text('sun_img')->nullable();
            $table->text('teddy_img')->nullable();
            $table->text('tnd_img')->nullable();
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
        Schema::dropIfExists('seeurrk');
    }
}
