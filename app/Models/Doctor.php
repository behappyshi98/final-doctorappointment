<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $table ='doctors';
    protected $fillable = [
        'name',
        'specialist',
        'gender',
        'email',
        'image', // Add image to fillable fields
        'contact_number',
        'hospital',
        'room_number',
        'appointment_date',
        'start_time',
        'end_time',
    ];
}
