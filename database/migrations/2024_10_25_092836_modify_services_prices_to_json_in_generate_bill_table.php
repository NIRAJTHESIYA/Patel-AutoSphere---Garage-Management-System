<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to change `services` and `prices` to JSON.
     */
    public function up(): void
    {
        Schema::table('generate_bill', function (Blueprint $table) {
            $table->json('services')->nullable()->change();
            $table->json('prices')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('generate_bill', function (Blueprint $table) {
            $table->text('services')->nullable()->change();
            $table->text('prices')->nullable()->change();
        });
    }
};
