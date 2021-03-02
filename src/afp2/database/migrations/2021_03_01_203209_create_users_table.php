<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('birthdate');
            $table->unsignedBigInteger('billing_address');
            $table->unsignedBigInteger('shipping_address');
            $table->timestamp('regdate');
            $table->tinyinteger('level');
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
        Schema::dropIfExists('users');
    }
}
