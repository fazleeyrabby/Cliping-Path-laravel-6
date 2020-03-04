<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicepage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('page_top_img')->nullable();
            $table->text('cp_img')->nullable();
            $table->text('br_img')->nullable();
            $table->text('im_img')->nullable();
            $table->text('ds_img')->nullable();
            $table->text('gm_img')->nullable();
            $table->text('cv_img')->nullable();
            $table->text('pr_img')->nullable();
            $table->text('ppe_img')->nullable();
            $table->string('page_top_title')->nullable();
            $table->text('page_top_des')->nullable();
            $table->text('top_img_under_des')->nullable();
            $table->string('sec_three_title')->nullable();
            $table->string('cp_title')->nullable();
            $table->text('cp_des')->nullable();
            $table->string('br_title')->nullable();
            $table->text('br_des')->nullable();
            $table->text('sec_four_des')->nullable();
            $table->string('im_title')->nullable();
            $table->text('im_des')->nullable();
            $table->string('ds_title')->nullable();
            $table->text('ds_des')->nullable();
            $table->text('sec_five_des')->nullable();
            $table->string('gm_title')->nullable();
            $table->text('gm_des')->nullable();
            $table->string('cv_title')->nullable();
            $table->text('cv_des')->nullable();
            $table->text('sec_six_des')->nullable();
            $table->string('pr_title')->nullable();
            $table->text('pr_des')->nullable();
            $table->string('pre_title')->nullable();
            $table->text('pre_des')->nullable();
            $table->text('sec_seven_des')->nullable();
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
        Schema::dropIfExists('servicepage');
    }
}
