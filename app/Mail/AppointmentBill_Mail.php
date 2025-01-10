<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentBill_Mail extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    public $car_number;
    public $kilometers;
    public $services;
    public $prices;
    public $total_amount;
    public $pdfPath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($car_number, $kilometers, $services, $prices, $total_amount, $pdfPath)
    {
        $this->car_number = $car_number;
        $this->kilometers = $kilometers;
        $this->services = $services;
        $this->prices = $prices;
        $this->total_amount = $total_amount;
        $this->pdfPath = $pdfPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Appointment Bill')
                    ->view('Admin.Appointment_Bill_mail')
                    ->attach($this->pdfPath, [
                        'as' => 'Appointment_Bill.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
