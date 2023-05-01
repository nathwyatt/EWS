<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Station_Data;
use App\Models\User;
use App\Notifications\SensorDataNotification;
use Illuminate\Http\Request;

class StationDataController extends Controller
{
    public function index()
    {
        
        $data = Station_Data::latest()->paginate(5);
        
     return view('stationdata.index',compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
       
    }

    public function create()
    {
        $station=Station::get();
       return view('stationdata.create',compact('station')); 
    }

    public function store(Request $request)
    {
        request()->validate([
            'water_level'=>'required',
             'temperature'=>'required',
             'hummidity'=>'required',
             'soil_moisture'=>'required',
             'station_id'=>'required'
            
        ]);
        Station_Data::create($request->all());
    
        return redirect()->route('stationdata.index')
                        ->with('success','station created successfully.');
    }
       

    public function sendNotifications($data)
{
    // Get the users that need to be notified
    $users = User::all(); // Example: notify all users

    // Create a new instance of the notification and pass the sensor data
    $notification = new SensorDataNotification($data);

    // Loop through the users and trigger the notification for each user
    foreach ($users as $user) {
        $user->notify($notification);
    }
}
public function processSensorData(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'temperature' => 'required|numeric',
        'humidity' => 'required|numeric',
        'water_level' => 'required|numeric',
        'soil_moisture' => 'required|numeric',
    ]);

    // Save the sensor data to the database
    $stationData = new Station_Data($validatedData);
    $stationData->save();

    // Trigger the notification system
    $this->sendNotifications($validatedData);


}

}
