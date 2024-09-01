<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingTable extends Migration
{
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('shipping_method'); 
            $table->string('tracking_number')->nullable();
            $table->decimal('shipping_cost', 8, 2)->nullable();
            $table->date('estimated_delivery')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipping');
    }
}
