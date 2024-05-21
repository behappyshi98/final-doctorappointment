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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialist');
            $table->enum('gender', ['male', 'female']);
            $table->string('email')->unique();
            $table->mediumText('image')->nullable(); // Changed to binary type for storing image data
            $table->string('contact_number');
            $table->string('hospital');
            $table->string('room_number');
            $table->date('appointment_date');
            $table->time('start_time');
            $table->time('end_time');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
