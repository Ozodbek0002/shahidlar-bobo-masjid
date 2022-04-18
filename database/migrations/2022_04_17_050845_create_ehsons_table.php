<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ehsons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('phone');
            $table->string('cart_num1');
            $table->string('cart_num2');
            $table->string('address');
            $table->string('img');
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
        Schema::dropIfExists('ehsons');
    }
};
