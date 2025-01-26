<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact_Form_Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Formdan gelen veriler

    /**
     * Create a new message instance.
     *
     * @param array $data
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
        return $this->subject('İletişim Mesajı') // E-posta konusu
                    ->view('emails.contact-form'); // E-posta şablonu
    }
}