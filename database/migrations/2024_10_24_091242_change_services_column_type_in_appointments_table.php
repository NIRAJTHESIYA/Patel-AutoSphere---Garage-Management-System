<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeServicesColumnTypeInAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Change the services column to JSON
            $table->json('services')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Change it back to string or text as per the original type
            $table->text('services')->nullable()->change(); // Use text if that's what it was
        });
    }
}
