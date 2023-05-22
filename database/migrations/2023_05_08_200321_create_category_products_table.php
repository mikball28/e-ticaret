<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
         //   $table->bigInteger('categoryId')->unsigned();
           // $table->bigInteger('productId')->unsigned();

            //$table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
            //$table->foreign('productId')->references('id')->on('products')->onDelete('cascade');

           // $table->unsignedBigInteger('user_id');

            //$table->foreign('user_id')->references('id')->on('users');

           $table->foreignId('category_id')->constrained();
           $table->foreignId('product_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_products');
    }
};
