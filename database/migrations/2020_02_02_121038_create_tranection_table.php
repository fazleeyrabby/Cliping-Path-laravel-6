<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranection', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender_number')->nullable();
            $table->integer('user_id');
            $table->string('trx_id')->nullable();
            $table->string('random_trx_id',15);
            $table->string('bank_number')->nullable();
            $table->string('payment_type');
            $table->string('payment_status');
            $table->string('amount');
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
        Schema::dropIfExists('tranection');
    }
}
