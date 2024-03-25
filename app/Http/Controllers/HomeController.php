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

        // Loop through station data to extract values and time
        foreach ($stationData as $dataPoint) {
            $temperatureData[] = $dataPoint->temperature;
            $waterLevelData[] = $dataPoint->water_level;
            $soilMoistureData[] = $dataPoint->soil_moisture;
            $humidityData[] = $dataPoint->humidity;
            $timeData[] = $dataPoint->created_at->format('Y-m-d H:i:s');
        }

        // Define thresholds for each parameter
        $temperatureThreshold = 25; // Example threshold for temperature
        $humidityThreshold = 60; // Example threshold for humidity
        $waterLevelThreshold = 50; // Example threshold for water level
        $soilMoistureThreshold = 40; // Example threshold for soil moisture

        // Initialize variables to hold status for each parameter
        $overallStatus = '';

        // Determine overall status based on thresholds
        if (
            $data->temperature < $temperatureThreshold &&
            $data->humidity < $humidityThreshold &&
            $data->water_level < $waterLevelThreshold &&
            $data->soil_moisture < $soilMoistureThreshold
        ) {
            $overallStatus = 'Normal';
        } elseif (
            $data->temperature >= $temperatureThreshold ||
            $data->humidity >= $humidityThreshold ||
            $data->water_level >= $waterLevelThreshold ||
            $data->soil_moisture >= $soilMoistureThreshold
        ) {
            $overallStatus = 'Warning';
        } else {
            $overallStatus = 'Danger';
        }
        
        // Pass data and overall status to the Blade view
        return view('station-manager.index', compact('data', 'com', 'numfarmers', 'numdata', 'unreadNotificationsCount', 'unreadNotifications', 'temperatureData', 'waterLevelData', 'soilMoistureData', 'humidityData', 'timeData', 'overallStatus'));

     }
    else 
    {


 //charts
    // Fetch data for the first station
    $stationData1 = Station_Data::where('station_id', 1)->get();
    $temperatureData1 = $stationData1->pluck('temperature');
    $waterLevelData1 = $stationData1->pluck('water_level');
    $soilMoistureData1 = $stationData1->pluck('soil_moisture');
    $humidityData1 = $stationData1->pluck('humidity');
    $timeData1 = $stationData1->pluck('created_at')->map(function ($item) {
        return $item->format('Y-m-d H:i:s');
    });

    // Fetch data for the second station
    $stationData2 = Station_Data::where('station_id', 2)->get();
    $temperatureData2 = $stationData2->pluck('temperature');
    $waterLevelData2 = $stationData2->pluck('water_level');
    $soilMoistureData2 = $stationData2->pluck('soil_moisture');
    $humidityData2 = $stationData2->pluck('humidity');
    $timeData2 = $stationData2->pluck('created_at')->map(function ($item) {
        return $item->format('Y-m-d H:i:s');

    });
    
    $numUsers = User::count();
    $numStations = Station::count();
    $numRoles = Role::count();

    $managers = User::all();
    $stations = Station::all();
    $station1 = Station::where('id', 1)->get();
    $station2 = Station::where('id', 2)->get();
    
    // Example thresholds for each parameter
$temperatureThreshold = 25;
$humidityThreshold = 60;
$waterLevelThreshold = 50;
$soilMoistureThreshold = 40;

// Fetch data for the first station
$data1 = Station_Data::where('station_id', 1)->latest('created_at')->first();
// Fetch data for the second station
$data2 = Station_Data::where('station_id', 2)->latest('created_at')->first();

// Determine overall status for the first station based on thresholds
if (
    $data1->temperature < $temperatureThreshold &&
    $data1->humidity < $humidityThreshold &&
    $data1->water_level < $waterLevelThreshold &&
    $data1->soil_moisture < $soilMoistureThreshold
) {
    $overallStatus1 = 'Normal';
} elseif (
    $data1->temperature >= $temperatureThreshold ||
    $data1->humidity >= $humidityThreshold ||
    $data1->water_level >= $waterLevelThreshold ||
    $data1->soil_moisture >= $soilMoistureThreshold
) {
    $overallStatus1 = 'Warning';
} else {
    $overallStatus1 = 'Danger';
}

// Determine overall status for the second station based on thresholds
if (
    $data2->temperature < $temperatureThreshold &&
    $data2->humidity < $humidityThreshold &&
    $data2->water_level < $waterLevelThreshold &&
    $data2->soil_moisture < $soilMoistureThreshold
) {
    $overallStatus2 = 'Normal';
} elseif (
    $data2->temperature >= $temperatureThreshold ||
    $data2->humidity >= $humidityThreshold ||
    $data2->water_level >= $waterLevelThreshold ||
    $data2->soil_moisture >= $soilMoistureThreshold
) {
    $overallStatus2 = 'Warning';
} else {
    $overallStatus2 = 'Danger';
}

// Now you have overall statuses for both stations: $overallStatus1 and $overallStatus2

    // dd($station1[0]->name);
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
        'overallStatus2'
    ));
    }
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
