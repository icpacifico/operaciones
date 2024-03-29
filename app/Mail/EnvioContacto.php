<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvioContacto extends Mailable
{
    use Queueable, SerializesModels;    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)

    {

        $this->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sociales@icpacifico.cl')->subject('Inmobiliaria Costanera Pacifico Formulario de Contacto')->view('email.contact_form', ['data' => $this->data]);        
    }
}
