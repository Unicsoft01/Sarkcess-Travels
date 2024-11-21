<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class CopyOfMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $acknowledgementData;

    /**
     * Create a new message instance.
     */
    public function __construct($acknowledgementData)
    {
        $this->acknowledgementData = $acknowledgementData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $purpose = $this->acknowledgementData['purpose'];
        $name = $this->acknowledgementData['fullname'];
        $from = $this->acknowledgementData['email'];

        if ($purpose == 'Study Abroad inquiries') {
            $subject = 'New Application from '. $name;
        } elseif ($purpose == 'Visa Assistance') {
            $subject = 'New VISA enquiry from '. $name;
        }  else {
            $subject = 'New enquiry  from '. $name;
        }

        return new Envelope(
            from: new Address($from, $name),

            replyTo: [
                new Address($from, $name),
            ],

            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.copy-of-mail',
            with: [
                'acknowledgementData' => $this->acknowledgementData
            ]
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