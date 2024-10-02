<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 8, 2); 
            $table->integer('stock'); 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); 
            $table->string('size')->nullable(); 
            $table->string('color')->nullable(); 
            $table->string('brand')->nullable(); 
            $table->integer('quantity')->default(0); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}