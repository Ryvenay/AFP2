<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('billing_address');
            $table->unsignedBigInteger('shipping_address');
            $table->tinyinteger('status');
            $table->timestamp('order_time');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipping_address')->references('id')->on('address');
            $table->foreign('billing_address')->references('id')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
