<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatwiseserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catwiseservice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('service_id');
            $table->string('page_title');
            $table->string('page_img_text');
            $table->text('page_img_under_des');
            $table->text('try_our_service_under_des');
            $table->text('why_cpbd_under_des');
            $table->text('page_content_des');
            $table->string('related_srvc_one');
            $table->string('related_srvc_two');
            $table->string('related_srvc_three');
            $table->string('related_srvc_name');
            $table->text('related_srvc_des');
            $table->text('page_img');
            $table->text('page_img_side_img');
            $table->text('our_wrk_actn_img_one');
            $table->text('our_wrk_actn_img_two');
            $table->text('our_wrk_actn_img_three');
            $table->text('our_wrk_actn_img_four');
            $table->text('related_srvc_img');
            $table->text('page_sample_img_one');
            $table->text('page_sample_img_two');
            $table->text('page_sample_img_three');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('catwiseservice');
    }
}
