<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_number');
            $table->date('order_date');
            $table->date('required_date');
            $table->dateTime('shipped_date');
            $table->tinyInteger('status');
            $table->text('comments');
            $table->integer('customer_number');
            $table->foreign('customer_number')->references('customer_number')->on('customers');
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
        Schema::dropIfExists('orders');
    }
}
