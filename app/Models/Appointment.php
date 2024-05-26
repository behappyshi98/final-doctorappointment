<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Appointment extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'doctor_id',
        'appointment_date',
        'patient_name',
        'contact_number',
        'email',
        'choose_doctor', // Add choose_doctor to the fillable array
        'department',
        'contact_preference',
    ];



   /* protected $fillable = [
        'patient_name',
        'contact_number',
        'choose_doctor', // Replace 'doctor_id' with 'choose_doctor' in the fillable array
        'symptoms',
        'blood_group',
        'appointment_date',
        'contact_preference'
    ];*/

    /**
     * Get the doctor associated with the appointment.
     */

}

