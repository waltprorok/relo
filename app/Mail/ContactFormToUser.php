<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormToUser extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $status;
    public string $email;
    public string $phone;
    public string $current_zip_code;
    public string $moving_to_city;
    public string $contact_message;

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->status = $request->status;
        $this->email = $request->email;
        $this->phone = $request->phone;
        $this->current_zip_code = $request->current_zip_code;
        $this->moving_to_city = $request->moving_to_city;
        $this->contact_message = $request->message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('pghmcq@gmail.com', 'Michael McQuillan'),
            subject: 'From Relo Agent Connect. Thanks for reaching out.',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact.contactTo',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
