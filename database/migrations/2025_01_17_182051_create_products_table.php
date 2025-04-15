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
            $table->foreignId('category_id')->constrained('categories','category_id')->onDelete('cascade') ; 
            $table->string('product_name') ; 
            $table->text('description') ; 
            $table->unsignedBigInteger('cost') ;
            $table->unsignedInteger('discount')->nullable() ; //TODO : make it 00.00
            $table->string('product_image')->nullable(); 
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
