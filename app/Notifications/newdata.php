<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newdata extends Notification
{
    use Queueable;
protected $stationData;

    /**
     * Create a new notification instance.
     */
    public function __construct($stationData,$message)
    {
     $this->stationData=$stationData;
     
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
        
           "temperature"=>$this->stationData->temperature,
           "water_level"=>$this->stationData->water_level,
           "hummidity"=>$this->stationData->hummidity
        ];
    }
}
