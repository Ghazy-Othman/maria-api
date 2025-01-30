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
        Schema::create('order_contents', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id') ; 
            $table->unsignedBigInteger('product_id') ; 
            $table->foreign('order_id')->references('order_id')->on('orders')->cascadeOnDelete() ;
            $table->foreign('product_id')->references('product_id')->on('products')->cascadeOnDelete() ;
            $table->integer('count') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_contents');
    }
};
