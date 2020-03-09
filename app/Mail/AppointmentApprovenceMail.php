<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class AppointmentApprovenceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $Bdata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Bdata)
    {
        $this->data = $Bdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->subject('Appointment Approved')->view('mail/appointment_approvence')->to($this->data['email'])->with('data',$this->data);
    }
}
