<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuestBookMail extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name;
    public $email;
    public $whatsapp;
    public $subject;
    public $message_nya;

    /**
     * Create a new message instance.
     */
    public function __construct($full_name, $email, $whatsapp, $subject, $message_nya)
    {
        $this->full_name   = $full_name;
        $this->email       = $email;
        $this->whatsapp    = $whatsapp;
        $this->subject     = $subject;
        $this->message_nya = $message_nya;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.guest_book',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
