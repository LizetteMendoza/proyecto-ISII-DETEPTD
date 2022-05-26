<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Petición de soporte";

    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $logueado = Auth::user();
        if($logueado){
            return $this->view('emails.contactanosl', compact('logueado'));
        }
        else{
            return $this->view('emails.contactanos');
        }
    }
}
