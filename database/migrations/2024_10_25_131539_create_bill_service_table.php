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
        Schema::create('bill_service', function (Blueprint $table) {
            $table->id('billservice_id');
            $table->unsignedBigInteger('bill_id');
            $table->string('service_name');
            $table->decimal('price', 10, 2);
            $table->timestamps();

            $table->foreign('bill_id')->references('bill_id')->on('generate_bill')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_service');
    }
};
