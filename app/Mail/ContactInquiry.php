<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param array $data  The validated form data
     */
    public function __construct(public array $data) {}

    /**
     * Get the message envelope.
     * Subject line seen in your inbox.
     */
    public function envelope(): Envelope
    {
        $services = !empty($this->data['services'])
            ? implode(', ', $this->data['services'])
            : 'General Inquiry';

        return new Envelope(
            replyTo: [$this->data['email']],
            subject: "New Inquiry: {$services} — {$this->data['name']}",
        );
    }

    /**
     * Get the message content.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-inquiry',
            with: ['data' => $this->data],
        );
    }
}