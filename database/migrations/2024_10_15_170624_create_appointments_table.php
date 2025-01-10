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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');

            $table->string('name');
            $table->string('phone');
            $table->string('email');

            $table->string('vehicle_name');
            $table->string('vehicle_model');
            $table->year('vehicle_year');

            $table->date('appointment_date');
            $table->string('appointment_time_slot');
            $table->json('services')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
