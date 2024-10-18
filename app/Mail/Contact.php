<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    // Declare public properties for the fields
    public $nom;
    public $email;
    public $contenue;

    /**
     * Create a new message instance.
     *
     * @param string $nom
     * @param string $email
     * @param string $contenue
     * @return void
     */
    public function __construct($nom, $email, $contenue)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->contenue = $contenue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@tunisiatrip.com')
                    ->subject('Contact recieved')
                    ->view('dashboard.mailing.contact')
                    ->with([
                    'nom' => $this->nom,
                    'email' => $this->email,
                    'contenue' => $this->contenue,
                ]);
    }
}
