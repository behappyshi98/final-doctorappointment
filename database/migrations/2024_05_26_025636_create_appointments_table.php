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
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->string('patient_name');
           // $table->foreignId('user_id')->constrained()->onDelete('cascade');
           // $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->string('contact_number');
            $table->string('email');
            $table->string('choose_doctor');
            $table->string('department');
            $table->date('appointment_date');
            $table->string('contact_preference');

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
