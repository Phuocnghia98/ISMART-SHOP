<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orderdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('order_number');
            // $table->foreign('order_number');->references('order_number')->on('orders');
            $table->integer('product_code');
            // $table->foreign('product_code');->references('product_code')->on('products');
            $table->tinyInteger('quantity_ordered');
            $table->float('price_each');
            $table->integer('order_lineNumber');
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
        Schema::dropIfExists('orderdetails');
    }
}
