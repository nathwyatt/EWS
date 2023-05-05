<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Station_Data;
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
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'station_data_id' => $this->stationData->id,
            'station_id' => $this->stationData->station_id,
            'message' => 'new data on ' . $this->stationData->name,
        ];
    }

 
}
