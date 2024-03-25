<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification
{
    use Queueable;

    private $details;

    /**
     * Create a new notification instance.
     */
    public function __construct($details)
    {
        $this->details=$details;
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
        $mailMessage = new MailMessage();
    
        // Check if $this->details is an array before accessing its elements
        if (is_array($this->details)) {
            // Check if the expected keys exist in $this->details before accessing them
            if (isset($this->details['greeting'])) {
                $mailMessage->greeting($this->details['greeting']);
            }
            if (isset($this->details['body'])) {
                $mailMessage->line($this->details['body']);
            }
            if (isset($this->details['actiontext']) && isset($this->details['actionurl'])) {
                $mailMessage->action($this->details['actiontext'], $this->details['actionurl']);
            }
            if (isset($this->details['lastline'])) {
                $mailMessage->line($this->details['lastline']);
            }
        } else {
            // Handle the case where $this->details is not an array
            $mailMessage->line('Error: Details are not provided correctly.');
        }
    
        return $mailMessage;
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
