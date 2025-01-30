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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->string('invoice_id') ; 
            $table->string('status') ;  
            $table->string('payment_gateway') ;
            $table->unsignedBigInteger('order_id') ; 
            $table->foreign('order_id')->references('order_id')->on('orders')->cascadeOnDelete() ;  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
