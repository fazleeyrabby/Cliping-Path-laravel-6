<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->integer('user_id');
            $table->string('ran_order_id',12);
            $table->integer('payment_id');
            $table->integer('package_id');
            $table->string('amount');
            $table->string('address');
            $table->string('currency');
            $table->string('order_status',15);
            $table->tinyInteger('status');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',250);
            $table->tinyInteger('quantity')->nullable();
            $table->string('resize_image',3)->nullable();
            $table->integer('image_width')->nullable();
            $table->integer('image_height')->nullable();
            $table->string('attache_zip');
            $table->string('set_margin',3)->nullable();
            $table->longText('additional_comment')->nullable();
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
        Schema::dropIfExists('order');
    }
}
