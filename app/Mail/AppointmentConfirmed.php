<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;
use App\Models\Appointment;

class AppointmentConfirmed extends Mailable
{
    use Queueable, SerializesModels;
    public $appointment;

    /**
     * Create a new message instance.
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Get the message envelope.
     */


     public function build()

    {
        return $this->subject('Appointment Confirmation')
                    ->view('emails.appointment_confirmed');
    }





}
