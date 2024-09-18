<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Station_Data;
use App\Models\User;
use App\Notifications\newdata;
use App\Notifications\SensorDataNotification;
use App\Notifications\StationDataUpdated;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Auth;
use Notification;

class StationDataController extends Controller
{
    public function index()
    {
       
        $id = Auth::user()->station->id;
        $data = Station_Data::where('station_id', $id)->get();
        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
        $unreadNotifications->markAsRead();
        
     return view('stationdata.index',compact('data','unreadNotificationsCount'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
       
    }

    public function create()
    {
        $station=Station::get();
        
       return view('stationdata.create',compact('station')); 
    }


    public function store(Request $request)
{
    $stationData = new Station_Data([
        'water_level' => $request->water_level,
        'temperature' => $request->temperature,
        'hummidity' => $request->hummidity,
        'soil_moisture' => $request->soil_moisture,
        'station_id' => $request->station_id,
    ]);

    $stationData->save();
   $message ='new data is created';
    $stationManagers = User::find(auth()->user()->id);
    if($stationManagers->hasRole("Station-manager") )
    {
        $stationManagers->notify(new newdata($stationData,$message));
   
    }

   

    return redirect()->route('stationdata.index')
                    ->with('success','New data created');
}

public function notifications()
{
    $notifications = auth()->user()->unreadNotifications;

    return view('station-manager.notifications', compact('notifications'));
}

}
