<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendApointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $Adata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Adata)
    {
        $this->data = $Adata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mail/appointmentconfirmation')->to($this->data['email']);
    }
}
