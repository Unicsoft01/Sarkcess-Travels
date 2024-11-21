<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcknowledgeNewApplications extends Notification implements ShouldQueue
{
    use Queueable;

    public $validatedData;

    /**
     * Create a new notification instance.
     */
    public function __construct($validatedData)
    {
        $this->validatedData = $validatedData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $user = $this->validatedData['fullname'];
        $purpose = $this->validatedData['purpose'];

        if ($purpose == 'Study Abroad inquiries') {
            $name = 'SarkcessConsults, Application Team';
            $from = 'info@sarkcessconsults.org';
            return (new MailMessage)
                ->from($from, $name)
                ->subject('Application Received! Your Journey to Study Abroad Begins Now!')
                ->greeting('Hello dear ' . $user . '!')
                ->line('Thank you for applying with Sarkcess Consults Ltd.! We’re thrilled to support you on your journey to studying abroad.')
                ->line(' Here’s what happens next:')
                ->line('  - Application Review: Our team will carefully review your application.')
                ->line('  - Next Steps: Once reviewed, we’ll reach out with any additional requirements or guidance to proceed.')

                ->line('If you have any questions, feel free to contact us anytime: either by sending us an email or via our Various Contact us pages');
        } 
        
        elseif ($purpose == 'Visa Assistance') {
            $name = 'SarkcessConsults, Admission Team';
            $from = 'admission@sarkcessconsults.org';
            return (new MailMessage)
                ->from($from, $name)
                ->subject('Your Visa Inquiry Has Been Received!')
                ->greeting('Hello dear ' . $user . '!')
                ->line('Thank you for reaching out about study visa assistance! Our admissions team at Sarkcess Consults Ltd. has received your inquiry. We’ll review the details and respond with specific guidance on your next steps. In the meantime, you can check out our [blog or FAQ page] for additional visa tips.')

                ->line('If you have any questions, feel free to contact us anytime: either by sending us an email or via our Various Contact us pages');
        } 
        
        elseif ($purpose == 'Application Submission') {
            $name = 'SarkcessConsults, Application Team';
            $from = 'apply@sarkcessconsults.org';

            return (new MailMessage)
                ->from($from, $name)
                ->subject('Application Submission Successful!')
                ->greeting('Hello dear ' . $user . '!')
                ->line('Thank you for submitting your application to Sarkcess Consults Ltd. We’ve received your documents and will begin the review process shortly. You’ll receive an update once we’ve evaluated your application, and we’ll notify you if any additional information is required.')

                ->line('If you have any questions, feel free to contact us anytime: either by sending us an email or via our Various Contact us pages');
        } 
        
        else {
            $name = 'SarkcessConsults, Enquiry Team';
            $from = 'info@sarkcessconsults.org';
            return (new MailMessage)
                ->from($from, $name)
                ->subject('Your Visa Inquiry Has Been Received!')
                ->greeting('Hello dear ' . $user . '!')
                ->line('Thank you for contacting Sarkcess Consults! Our team has received your inquiry. We’ll get back to you within the shortest time possible with the information you need. In the meantime, feel free to explore our website or connect with us for more details about studying abroad.')

                ->line('If you have any questions, feel free to contact us anytime: either by sending us an email or via our Various Contact us pages');
        }


        // return (new MailMessage)
        //     ->from($from, $name)
        //     ->subject('Application Received! Your Journey to Study Abroad Begins Now!')
        //     ->greeting('Hello dear '. $user.'!')
        //     ->line('A new application has been submitted through the Sarkcess Consults Ltd. portal. Here are some details:')

        //     ->line('Thank you for helping make study abroad dreams come true!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}