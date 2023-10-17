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
        $data = Station_Data::where('station_id',$id)->latest('created_at')->first();
        $com = Community::where('station_id', $id)->get();
        $stationId=$request->input('station_id');

        $numfarmers = Community::where('station_id', $id)->count(); 
        $numdata = Station_Data::where('station_id', $id)->count(); 

        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
        $unreadNotifications->markAsRead();
        // $notifications = auth()->user()->unreadNotifications->toArray();
     


        //charts
        $temperatureData = []; // Initialize an empty array for temperature data
        $waterLevelData = []; // Initialize an empty array for water level data
        $soilMoistureData = []; // Initialize an empty array for soil moisture data
        $humidityData = []; // Initialize an empty array for humidity data
        $timeData = []; // Initialize an empty array for time data
    
        $stationData = Station_Data::where('station_id', $id)->get();
    
        foreach ($stationData as $data) {
            $temperatureData[] = $data->temperature; 
            $waterLevelData[] = $data->water_level; 
            $soilMoistureData[] = $data->soil_moisture; 
            $humidityData[] = $data->hummidity; 
            $timeData[] = $data->created_at->format('Y-m-d H:i:s'); 
        }

        return view('station-manager.index', compact('data','com','numfarmers','numdata','unreadNotificationsCount','unreadNotifications','temperatureData', 'waterLevelData', 'soilMoistureData', 'humidityData', 'timeData'));
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
        'station2'
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
        $user=User::all();

        $details=[
            'greeting' => $request->input('greeting'),
            'body' => $request->input('body'),
            'actiontext' => $request->input('actiontext'),
            'actionurl' => $request->input('actionurl'),
            'lastline' => $request->input('lastline'),
        ];

        Notification::send($user, new EmailNotification($details));

        return redirect('/notifications')->with('success', 'Notification sent successfully!');
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
