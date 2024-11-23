<?php

namespace App\Notifications;

use App\Models\Universities;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewStudyApplication extends Notification implements ShouldQueue
{
    use Queueable;

    public $validatedData;
    public $university;

    /**
     * Create a new notification instance.
     */
    public function __construct($validatedData)
    {
        $this->validatedData = $validatedData;
        $this->university = Universities::find($this->validatedData['university_id'])->university;
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
        $name = 'Notification Team';

        $user = $this->validatedData['first_name'] . ' ' . $this->validatedData['last_name'];
        $email = $this->validatedData['email'];
        $phone = $this->validatedData['phone'];
        $purpose = "Application to study in " . $this->university;
        $from = 'apply@sarkcessconsults.org';

        return (new MailMessage)
            ->from($from, $name)
            ->subject('New Application Notification from ' . $user)
            ->greeting('Hello Admin!')
            ->line('A new application has been submitted through the Sarkcess Consults Ltd. portal. Here are some details:')
            ->line('Purpose of Application: ' . $purpose)
            ->line('Applicant Name: ' . $user)
            ->line('Applicant Email: ' . $email)
            ->line('Applicant Phone: ' . $phone)
            ->action('Login ', url('/login'))
            ->line('Full details of the application was mailed to ' . $from)
            ->line('Please review the application at your earliest convenience to ensure a smooth process.')
            ->line('Thank you for helping make study abroad dreams come true!');
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