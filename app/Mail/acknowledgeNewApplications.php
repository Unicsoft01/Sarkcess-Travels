<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class acknowledgeNewApplications extends Mailable implements ShouldQueue
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

        if ($purpose == 'Study Abroad inquiries') {
            $name = 'SarkcessConsults, Application Team';
            $from = 'info@sarkcessconsults.org';
            $subject = 'Application Received! Your Journey to Study Abroad Begins Now!';
        } elseif ($purpose == 'Visa Assistance') {
            $name = 'SarkcessConsults, Admission Team';
            $from = 'admission@sarkcessconsults.org';
            $subject = 'Your Visa Inquiry Has Been Received!';
        } elseif ($purpose == 'Application Submission') {
            $name = 'SarkcessConsults, Application Team';
            $from = 'apply@sarkcessconsults.org';
            $subject = 'Application Submission Successful!';
        } else {
            $name = 'SarkcessConsults, Enquiry Team';
            $from = 'info@sarkcessconsults.org';
            $subject = 'Your Visa Inquiry Has Been Received!';
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
            markdown: 'mail.acknowledge-new-applications',
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