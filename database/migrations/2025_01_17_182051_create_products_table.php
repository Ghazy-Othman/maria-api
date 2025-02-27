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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name') ; 
            $table->text('description') ; 
            $table->float('cost') ;
            $table->float('discount')->nullable() ;
            $table->string('product_image')->nullable(); 
            $table->unsignedBigInteger('category_id') ; 
            $table->foreign('category_id')->references('category_id')->on('categories')->cascadeOnDelete() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
