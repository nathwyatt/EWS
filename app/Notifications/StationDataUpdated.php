<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Station_Data;
use Illuminate\Notifications\Messages\BroadcastMessage;

class StationDataUpdated extends Notification
{
    use Queueable;
    protected $stationData;
    /**
     * Create a new notification instance.
     */
    public function __construct($stationData)
    {
        $this->stationData = $stationData;
    }
    
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function viaNotificationChannel()
{
    return ['database'];
}
    public function via($notifiable)
    {
        return ['database', 'mail', 'broadcast'];
    }

    

    public function toArray($notifiable)
    {
        return [
            'message' => 'New station data has been added to your station.',
            'link' => '/station-data/' . $this->stationData->id,
        ];
    }
 
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => 'New station data has been added to your station.',
            'link' => '/station-data/' . $this->stationData->id,
        ]);
    }
}
