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
            $table->string('product_name');
            $table->decimal('product_price', 10, 2);
            $table->string('product_photo_1')->nullable();
            $table->string('product_photo_2')->nullable();
            $table->string('product_photo_3')->nullable();
            $table->string('product_photo_4')->nullable();
            $table->string('product_photo_5')->nullable();
            $table->enum('availability', ['in stock', 'out of stock']);
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->string('product_dimensions')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('warranty')->nullable();
            $table->string('car_model')->nullable();
            $table->enum('status', ['best seller', 'trending product', 'popular product']);
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('product_categories')->onDelete('cascade');

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
