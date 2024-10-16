<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use App\Models\Station;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Station_Data;
use Notification;
use App\Notifications\EmailNotification;
use App\Notifications\dashboardNotification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Mail\FloodNotificationEmail;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)

    {   

        $user = Auth::user();
        if ($user->hasRole("Station-manager"))
        {
            $id = Auth::user()->station->id;
            $data = Station_Data::where('station_id', $id)->latest('created_at')->first();
            $com = Community::where('station_id', $id)->get();
            $stationId = $request->input('station_id');
            $numfarmers = Community::where('station_id', $id)->count();
            $numdata = Station_Data::where('station_id', $id)->count();
            $unreadNotifications = auth()->user()->unreadNotifications;
            $unreadNotificationsCount = $unreadNotifications->count();
            $unreadNotifications->markAsRead();

            // Initialize arrays for holding data
            $temperatureData = [];
            $waterLevelData = [];
            $soilMoistureData = [];
            $humidityData = [];
            $timeData = [];
            // Fetch station data
            $stationData = Station_Data::where('station_id', $id)->get();
            $level = Station_Data::where('station_id', $id)->value('water_level');

            // Fetch the name of the station
            $location = Station::where('id', $id)->value('name');
            
            if($level<1){
            // Send the email
            Mail::to('nathwyatt0@gmail.com')->send(new FloodNotificationEmail($level, $location));
            }
            // Loop through station data to extract values and time
            foreach ($stationData as $dataPoint) {
                $temperatureData[] = $dataPoint->temperature;
                $waterLevelData[] = $dataPoint->water_level;
                $soilMoistureData[] = $dataPoint->soil_moisture;
                $humidityData[] = $dataPoint->humidity;
                $timeData[] = $dataPoint->created_at->format('Y-m-d H:i:s');
            }
            // Define thresholds for each parameter
            $temperatureThreshold = 25;
            $humidityThreshold = 60; 
            $waterLevelThreshold = 100; 
            $soilMoistureThreshold = 40; 

            // Initialize variables to hold status for each parameter
            $overallStatus = '';

            $message = '';
             // Fetch all users to notify
        $usersToNotify = User::whereHas('station', function($query) use ($id) {
            $query->where('id', $id);
        })->get();

         // Check water level and set overall status
         if ($data->water_level < 100) {
            $overallStatus = 'Danger';

            // If water level is less than 10, send notification email to all users
            $this->sendWaterLevelNotification($usersToNotify, $data->water_level);
            $message = 'Danger: Water level is critically low.';
        } elseif ($data->water_level < 50) {
            $overallStatus = 'Warning';
            $message = 'Warning: Water level is below normal.';
        } else {
            $overallStatus = 'Normal';
        }

            return view('station-manager.index', compact('data', 'com', 'numfarmers', 'numdata', 'unreadNotificationsCount', 'unreadNotifications', 'temperatureData', 'waterLevelData', 'soilMoistureData', 'humidityData', 'timeData', 'overallStatus',))->with('message', $message);      
           
        }
        else 
        {
        

        
        // Fetch general counts
        $numUsers = User::count();
        $numStations = Station::count();
        $numRoles = Role::count();

        // Fetch managers and stations
        $managers = User::all();
        $stations = Station::all();

    // Fetch data for Station 1
    $station1 = Station::where('id', 1)->first();
    $manager1 = $station1 ? User::find($station1->user_id) : null;
    $farmers1 = $station1 ? Community::where('station_id', $station1->id)->count() : 0;
    $data1 = $station1 ? Station_Data::where('station_id', 1)->latest('created_at')->first() : null;
    $overallStatus1 = $data1 ? $this->getOverallStatus($data1) : 'Unknown';
    $stationData1 = Station_Data::where('station_id', 1)->get();
        $temperatureData1 = $stationData1->pluck('temperature');
        $waterLevelData1 = $stationData1->pluck('water_level');
        $soilMoistureData1 = $stationData1->pluck('soil_moisture');
        $humidityData1 = $stationData1->pluck('humidity');
        $timeData1 = $stationData1->pluck('created_at')->map(function ($item) {
            return $item->format('Y-m-d H:i:s');
        });

    // Fetch data for Station 2
    $station2 = Station::where('id', 2)->first();
    $manager2 = $station2 ? User::find($station2->user_id) : null;
    $farmers2 = $station2 ? Community::where('station_id', $station2->id)->count() : 0;
    $data2 = $station2 ? Station_Data::where('station_id', 2)->latest('created_at')->first() : null;
    $overallStatus2 = $data2 ? $this->getOverallStatus($data2) : 'Unknown';

    $stationData2 = Station_Data::where('station_id', 2)->get();
    $temperatureData2 = $stationData2->pluck('temperature');
    $waterLevelData2 = $stationData2->pluck('water_level');
    $soilMoistureData2 = $stationData2->pluck('soil_moisture');
    $humidityData2 = $stationData2->pluck('humidity');
    $timeData2 = $stationData2->pluck('created_at')->map(function ($item) {
        return $item->format('Y-m-d H:i:s');
    });

        // Get latitude and longitude for both stations
        $latitude = $data1 ? $data1->latitude : null;
        $longitude = $data1 ? $data1->longitude : null;
        $latitude2 = $data2 ? $data2->latitude : null;
        $longitude2 = $data2 ? $data2->longitude : null;

    
        $temperatureThreshold = 25;
        $humidityThreshold = 60;
        $waterLevelThreshold = 50;
        $soilMoistureThreshold = 300;
    
        return view('home', compact(
            'numUsers',
            'numStations',
            'numRoles',
            'managers',
            'stations',
            'temperatureData1',
            'waterLevelData1',
            'soilMoistureData1',
            'humidityData1',
            'timeData1',
            'temperatureData2',
            'waterLevelData2',
            'soilMoistureData2',
            'humidityData2',
            'timeData2',
            'station1',
            'station2',
            'overallStatus1',
            'overallStatus2',
            'longitude',
            'latitude',
            'latitude2',
            'longitude2',
            'manager1',
            'farmers1',
            'farmers2',
            'manager2'
        ));
      }
    }
    /**
     * Determine overall status based on the latest water level data.
     *
     * @param \App\Models\Station_Data|null $data
     * @return string
     */
    protected function getOverallStatus($data)
    {
        if ($data) {
            if ($data->water_level <= 10) {
                return 'Danger';
            } elseif ($data->water_level < 50) {
                return 'Warning';
            } else {
                return 'Normal';
            }
        }
        return 'Unknown'; // Return 'Unknown' if no data is available
    }
    public function view()
    {
        $data2 = User::select('id', 'created_at')->get()->groupBy(function($data2){
        return Carbon::parse($data2->created_at)->format('M');
             });
             $months=[];
             $monthcount=[];
             foreach($data2 as $months => $values){
             $months[]=$months;
             $monthcount[]= count($values);
             }
         return view('layouts/dashboard',['data'=>$data2,'months' => $months, 'monthcount' => $monthcount]);
    }

    public function SendNotification(Request $request)
    {
        $user = User::all();
        $title = 'Email Notification';
        $details = [
            'greeting' => $request->input('greeting'),
            'body' => $request->input('body'),
            'actiontext' => $request->input('actiontext'),
            'actionurl' => $request->input('actionurl'),
            'lastline' => $request->input('lastline'),
        ];
    
        Notification::send($user, new EmailNotification($title,$details));
    
        $dashboardNotificationDetails = [
            'message' => 'An email notification has been sent.',
            'email_title' =>$title,
            'email_details' => $details,
        ];
    
        Notification::send(auth()->user(), new dashboardNotification($dashboardNotificationDetails));
    
        // Retrieve notifications for the authenticated user
        $notifications = Auth::user()->notifications()->latest()->get();
        // Store notifications in the session
        session()->flash('notifications', $notifications);
    
        return redirect('/home')->with('success', 'Notification sent successfully!');
    }

    //waterlevle notification
    private function sendWaterLevelNotification($users, $waterLevel)
    {
        foreach ($users as $user) {
            // Check if user is valid and has an email
            if ($user !== null && !empty($user->email)) {
                $details = [
                    'greeting' => 'Dear ' . $user->name,
                    'body' => 'The water level at your station has dropped to ' . $waterLevel . '. Immediate action may be required.',
                    'actiontext' => 'View Station',
                    'actionurl' => url('/station-manager'),
                    'lastline' => 'This is an automated message from EWS Muvumba.'
                ];

                try {
                    // Send notification to the user's email
                    Notification::route('mail', $user->email)->notify(new EmailNotification('Water Level Alert', $details));
                } catch (\Exception $e) {
                    // Log any exceptions that occur while sending the email
                    Log::error('Failed to send water level notification to ' . $user->email . ': ' . $e->getMessage());
                }
            } else {
                // Log an error for invalid users or missing emails
                Log::error('Failed to send water level notification: User is invalid or missing email.');
            }
        }
    }

    // Controller method to display all notifications
    public function showNotifications()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->latest()->get();
        
        // Define the details for the notification
        $details = [
            'message' => 'Notification Message', // Assuming this is one of the details you want to include
            // Add other details here as needed
        ];
        
        // Define the title
        $title = 'Notification Title';
    
        // Create an instance of dashboardNotification with both $details and $title
        $notification = new dashboardNotification($details, $title);
    
        return view('notifications.index', compact('notifications'));
    }
    public function clearNotification($notificationId)
    {
        // Find the notification by ID
        $notification = Auth::user()->notifications()->where('id', $notificationId)->first();

        if ($notification) {
            $notification->delete(); // Delete the notification
        }

        return Redirect::back()->with('success', 'Notification cleared successfully.');
    }
    public function showNotificationForm()
    {
        return view('notifications.form');
    }
      public function layout()
    {
        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
    dd($unreadNotificationsCount);
        // Mark all unread notifications as read
        $unreadNotifications->markAsRead();
        return view('stations', compact('unreadNotificationsCount'));
    }
  
}
