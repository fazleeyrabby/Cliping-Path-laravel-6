<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('page_top_img')->nullable();
            $table->text('sec_two_img_one')->nullable();
            $table->text('sec_two_img_two')->nullable();
            $table->text('sec_two_img_three')->nullable();
            $table->text('sec_three_img_one')->nullable();
            $table->text('sec_three_img_two')->nullable();
            $table->text('sec_three_img_three')->nullable();
            $table->text('sec_five_img')->nullable();
            $table->text('sec_six_img_one')->nullable();
            $table->text('sec_six_img_two')->nullable();
            $table->text('sec_six_img_three')->nullable();
            $table->text('sec_six_img_four')->nullable();
            $table->text('sec_six_img_five')->nullable();
            $table->text('sec_six_img_six')->nullable();
            $table->text('sec_six_img_seven')->nullable();
            $table->text('sec_six_img_eight')->nullable();
            $table->text('location_img_one')->nullable();
            $table->text('location_img_two')->nullable();
            $table->text('location_img_three')->nullable();
            $table->text('location_img_four')->nullable();
            $table->text('location_img_five')->nullable();
            $table->string('page_top_title')->nullable();
            $table->text('page_top_des')->nullable();
            $table->string('sec_two_title')->nullable();
            $table->string('sec_two_sub_title_one')->nullable();
            $table->text('sec_two_sub_des_one')->nullable();
            $table->string('sec_two_sub_title_two')->nullable();
            $table->text('sec_two_sub_des_two')->nullable();
            $table->string('sec_two_sub_title_three')->nullable();
            $table->text('sec_two_sub_des_three')->nullable();
            $table->text('sec_three_des_one')->nullable();
            $table->text('sec_three_des_two')->nullable();
            $table->text('sec_three_des_three')->nullable();
            $table->text('sec_five_des')->nullable();
            $table->text('location_des')->nullable();
            $table->string('location_img_title_one')->nullable();
            $table->string('location_img_title_two')->nullable();
            $table->string('location_img_title_three')->nullable();
            $table->string('location_img_title_four')->nullable();
            $table->string('location_img_title_five')->nullable();
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
        Schema::dropIfExists('about');
    }
}
