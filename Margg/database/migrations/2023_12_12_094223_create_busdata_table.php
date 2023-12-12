<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('busdata', function (Blueprint $table) {
            $table->id();
            $table->string("Bus No");
            $table->time("Arrival Time");
            $table->date("Date");
            $table->time("Duration");
            $table->time("Departure Time");
            $table->date("Arrival Date");
            $table->string("From");
            $table->string("To");
            $table->string("Price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busdata');
    }
};
