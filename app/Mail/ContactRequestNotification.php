<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $contactData
    ) {
    }

    public function envelope(): Envelope
    {
        $replyTo = [];

        if (!empty($this->contactData['email'])) {
            $replyTo[] = new Address(
                $this->contactData['email'],
                $this->contactData['name'] ?? null
            );
        }

        return new Envelope(
            subject: 'New Contact Request - ' . ($this->contactData['name'] ?? 'Website Visitor'),
            replyTo: $replyTo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-request-notification',
        );
    }
}
