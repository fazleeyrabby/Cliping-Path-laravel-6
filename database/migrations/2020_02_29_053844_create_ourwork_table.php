<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourwork', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('page_top_img')->nullable();
            $table->text('sec_three_img_one')->nullable();
            $table->text('sec_three_img_two')->nullable();
            $table->text('sec_three_img_three')->nullable();
            $table->text('sec_three_img_four')->nullable();
            $table->text('sec_three_img_five')->nullable();
            $table->text('sec_three_img_six')->nullable();
            $table->text('sec_three_img_seven')->nullable();
            $table->text('sec_three_img_eight')->nullable();
            $table->text('sec_six_img_one')->nullable();
            $table->text('sec_six_img_two')->nullable();
            $table->text('sec_six_img_three')->nullable();
            $table->string('page_top_title')->nullable();
            $table->text('page_top_des')->nullable();
            $table->string('sec_two_title_one')->nullable();
            $table->string('sec_two_title_two')->nullable();
            $table->string('sec_two_title_three')->nullable();
            $table->string('sec_two_title_four')->nullable();
            $table->string('sec_two_title_five')->nullable();
            $table->string('sec_two_title_six')->nullable();
            $table->string('sec_two_title_seven')->nullable();
            $table->string('sec_two_title_eight')->nullable();
            $table->string('sec_two_title_nine')->nullable();
            $table->string('sec_two_title_ten')->nullable();
            $table->string('sec_six_title_one')->nullable();
            $table->string('sec_six_title_two')->nullable();
            $table->string('sec_six_title_three')->nullable();
            $table->text('sec_six_des_one')->nullable();
            $table->text('sec_six_des_two')->nullable();
            $table->text('sec_six_des_three')->nullable();
            $table->text('sec_five_des')->nullable();
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
        Schema::dropIfExists('ourwork');
    }
}
