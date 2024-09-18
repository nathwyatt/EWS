<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Nexmo\NexmoSmsMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class SensorDataNotification extends Notification
{
    use Queueable;

    protected $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','nexmo', 'slack'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->line('Hello,')
        ->line('Sensor data update:')
        ->line('Temperature: '.$this->data['temperature'])
        ->line('Humidity: '.$this->data['humidity'])
        ->line('Water Level: '.$this->data['water_level'])
        ->line('Soil Moisture: '.$this->data['soil_moisture']);         
        // ->action('Notification Action', url('/'));
                  
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */

    //  public function toNexmo($notifiable)
    //  {
    //      return (new NexmoSmsMessage)
    //          ->content('New sensor data received: Temperature: ' . $this->data['temperature'] . ', Humidity: ' . $this->data['humidity'] . ', Water level: ' . $this->data['water_level'] . ', Soil moisture: ' . $this->data['soil_moisture']);
    //  }



    // public function toArray(object $notifiable): array
    // {
    //     return [
    //         //$user->notify(new SensorDataNotification($sensor_data));

    //     ];
    // }
}
