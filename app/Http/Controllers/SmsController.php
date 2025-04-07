<?php

namespace App\Http\Controllers;

use App\Models\SmsNotification;
use App\Models\Station_Data;
use App\Models\Station;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SmsController extends Controller
{
   
      
    public function sendsms()
    {
        // Define water level threshold
        $waterlevelThreshold = 50;
      
        $id = Auth::user()->station->id;

        // Retrieve the latest water level for the given station
        $latestWaterLevel = Station_Data::where('station_id', $id)
        ->orderBy('created_at', 'desc')
        ->first();

        // Check if water level exceeds the threshold
        if ($latestWaterLevel->water_level < $waterlevelThreshold) {

            $apiKey = config('services.infobip.api_key');
            $from = config('services.infobip.from');
            $url = config('services.infobip.url');

            $recipients = [
                ['to' => '250780968325'],
                ['to' => '250788565520']
            ];
            $channel = 'SMS';
            $message = 'Muraho neza. Turabamenyesha ko hari umwuzure uteganyijwe kumugezi wa Muvumba. murasabwa kwitwararika';

            foreach ($recipients as $recipient) {
                try {
                    $response = Http::withHeaders([
                        'Authorization' => 'App ' . $apiKey,
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json'
                    ])->post($url, [
                        'messages' => [
                            [
                                'destinations' => [$recipient],
                                'from' => $from,
                                'text' => $message
                            ]
                        ]
                    ]);

    
                    $status = $response->ok() ? 'success' : 'failure';
    
                    // Save the notification to the database
                    SmsNotification::create([
                        'phone_number' => $recipient['to'],
                        'message' => $message,
                        'status' => $status,
                        'from' => $from,
                        'channel' => $channel,
                    ]);
    
                    if (!$response->ok()) {
                        Log::error('Unexpected HTTP status: ' . $response->status() . ' ' . $response->body());
                    }
                } catch (\Exception $e) {
                    Log::error('Error sending SMS: ' . $e->getMessage());
    
                    // Save the failure notification to the database
                    SmsNotification::create([
                        'phone_number' => $recipient['to'],
                        'message' => $message,
                        'status' => 'error: ' . $e->getMessage(),
                        'from' => $from,
                        'channel' => $channel,
                    ]);
                }
            }
    

        } else {
            Log::info('level of water is below the threshold or no data found for station ID: ' . $id);
        }
        
        return redirect()->route('notifications.history')->with('success', 'Notification sent .');
    }


    public function notificationHistory()
    {
        $notifications = SmsNotification::all();
       
        return view('notifications.history', compact('notification'));
    }

    public function deleteNotification($id)
    {
        $notification = SmsNotification::find($id);
        if ($notification) {
            $notification->delete();
            return redirect()->route('notifications.history')->with('success', 'Notification deleted successfully.');
        }
        return redirect()->route('notifications.history')->with('error', 'Notification not found.');
    }

    public function deleteNotifications(Request $request)
    {
        $ids = $request->input('selected');
        if (!empty($ids)) {
            SmsNotification::whereIn('id', $ids)->delete();
            return redirect()->route('notifications.history')->with('success', 'Notifications deleted successfully.');
        }
        return redirect()->route('notifications.history')->with('error', 'No notifications selected for deletion.');
    }
}
