<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('fb')->nullable();
            $table->text('tweeter')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('brows_help_img')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('ask_beacon_img')->nullable();
            $table->text('sm_img')->nullable();
            $table->text('sm_img_two')->nullable();
            $table->text('page_top_title')->nullable();
            $table->text('pagetop_sub_title')->nullable();
            $table->text('brows_help_des')->nullable();
            $table->text('askbeacon_des')->nullable();
            $table->text('gettouch_des')->nullable();
            $table->text('sub_email_des')->nullable();
            $table->text('sm_des')->nullable();
            $table->text('sm_des_two')->nullable();
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
        Schema::dropIfExists('help');
    }
}
