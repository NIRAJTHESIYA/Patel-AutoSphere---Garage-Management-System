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
            $table->unsignedBigInteger('cart_id');
            $table->tinyInteger('payment_status')->default(0);
            $table->string('razorpay_payment_id')->nullable();
            $table->string('token')->unique();
            $table->timestamps();

            $table->foreign('cart_id')
                  ->references('cart_id')
                  ->on('cart')
                  ->onDelete('cascade');
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
