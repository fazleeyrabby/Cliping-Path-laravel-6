<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cp_img')->nullable();
            $table->string('cp_title')->nullable();
            $table->string('cp_sub_title')->nullable();
            $table->text('ds_img')->nullable();
            $table->string('ds_title')->nullable();
            $table->string('ds_sub_title')->nullable();
            $table->text('gm_img')->nullable();
            $table->string('gm_title')->nullable();
            $table->string('gm_sub_title')->nullable();
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
        Schema::dropIfExists('pricing');
    }
}
