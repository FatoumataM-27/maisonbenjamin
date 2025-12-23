<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Les données du formulaire de contact
     *
     * @var array
     */
    public $data;

    /**
     * Créer une nouvelle instance de message.
     *
     * @param  array  $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Obtenir l'enveloppe du message.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nouveau message de contact - ' . $this->data['sujet'],
            replyTo: $this->data['email'],
        );
    }

    /**
     * Obtenir la définition du contenu du message.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact',
        );
    }

    /**
     * Obtenir les pièces jointes du message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
