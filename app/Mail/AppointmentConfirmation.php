<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this->subject('Appointment Request Submitted')
                    ->view('Appointment.mail')
                    ->with([
                        'name' => $this->appointment->name,
                        'phone' => $this->appointment->phone,
                        'appointment_id' => $this->appointment->appointment_id,
                        'appointment_date' => $this->appointment->appointment_date,
                        'appointment_time' => $this->appointment->appointment_time,
                        'services' => json_decode($this->appointment->services),
                    ]);

    }
}