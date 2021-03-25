<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;


    public $subject = "Información de Contacto";
    public $contacto = "esta informacion es de contacto";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        //Envio informacion desde el controlador
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Traera una vista
        return $this->view('emails.contactanos');
    }
}
