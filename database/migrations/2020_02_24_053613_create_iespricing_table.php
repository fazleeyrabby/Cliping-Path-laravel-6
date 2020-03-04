<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIespricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iespricing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dlr_img')->nullable();
            $table->string('paypal_img')->nullable();
            $table->string('bank_img')->nullable();
            $table->string('bkash_img')->nullable();
            $table->string('rocket_img')->nullable();
            $table->string('tp_title')->nullable();
            $table->text('page_top_des')->nullable();
            $table->text('ec_des')->nullable();
            $table->string('ec_title')->nullable();
            $table->string('save_time')->nullable();
            $table->text('std_des')->nullable();
            $table->string('business_friendly')->nullable();
            $table->text('business_friendly_des')->nullable();
            $table->string('save_money')->nullable();
            $table->text('save_money_des')->nullable();
            $table->string('valid_for')->nullable();
            $table->text('valid_for_des')->nullable();
            $table->text('pay_as_go_des')->nullable();
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
        Schema::dropIfExists('iespricing');
    }
}
