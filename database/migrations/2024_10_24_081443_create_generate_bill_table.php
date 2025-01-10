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
        Schema::create('generate_bill', function (Blueprint $table) {
            $table->id('bill_id');
            $table->unsignedBigInteger('appointment_id');
            $table->decimal('kilometers', 8, 2);
            $table->text('services')->nullable();
            $table->text('prices')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('appointment_id')->references('appointment_id')->on('appointments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generate_bill');
    }
};
