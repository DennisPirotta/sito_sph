<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WorkRequest extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $text;
    public string $cv_path;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $text, string $cv_path)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->cv_path = $cv_path;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Richiesta di lavoro',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.work-request',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->cv_path)->as("cv_$this->name.pdf"),
        ];
    }
}
