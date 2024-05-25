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
            $table->string('patient_name');
           // $table->foreignId('user_id')->constrained()->onDelete('cascade');
           // $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->string('contact_number');
            $table->string('email')->unique();
            $table->string('choose_doctor');
            //$table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('doctor_id');
            $table->string('department');
           // $table->string('blood_group');
            $table->date('appointment_date');
            $table->string('contact_preference');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('doctor_id')->references('id')->on('doctors');
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
