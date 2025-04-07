<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Station_Data;
use App\Models\DeviceData;
use App\Models\User;
use App\Notifications\newdata;
use App\Notifications\SensorDataNotification;
use App\Notifications\StationDataUpdated;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Notification;

use App\Mail\FloodNotificationEmail;
use Illuminate\Support\Facades\Mail;

class StationDataController extends Controller
{
    public function index()
    {
       
        $id = Auth::user()->station->id;
        $data = Station_Data::where('station_id', $id)->get();
        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
        $unreadNotifications->markAsRead();

        $device_status = DeviceData::where('device_Id',$id)      
        ->latest('timestamp')
        ->first();
    
     return view('stationdata.index',compact('data','unreadNotificationsCount','device_status'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
       
    }

    public function create()
    {
        $station=Station::get();
        
       return view('stationdata.create',compact('station')); 
    }

public function store(Request $request)
{
    $url = 'http://16.171.199.207:3000/latest/sensor_measurements';

    $response = Http::get($url);
    $station_id = 2;
    if ($response->successful()) {
        $data = $response->json();

        $stationData = Station_Data::create([
            'timestamp' => $data['timestamp'],
            'air_temperature' => $data['Air Temperature (°C)'],
            'air_humidity' => $data['Air Humidity (%)'],
            'barometric_pressure' => $data['Barometric Pressure (hPa)'],
            'light_intensity' => $data['Light Intensity (W/m²)'],
            'wind_direction' => $data['Wind Direction (°)'],
            'wind_speed' => $data['Wind Speed (m/s)'],
            'rainfall_accumulated' => $data['Rainfall Accumulated (mm)'],
            'rainfall_hourly' => $data['Rainfall hourly (mm/h)'],
            'soil_temperature' => $data['Soil Temperature (°C)'],
            'soil_volumetric_water_content' => $data['soil Volumetric water content (%)'],
            'water_level' => $data['Water level (river)'],
            'station_id' => $request->station_id?? auth()->user()->station->id,
        ]);

        $message = 'New data is created';

        $stationManager = User::find(auth()->user()->id);

        if ($stationManager->hasRole('Station-manager')) {
            $stationManager->notify(new newdata($stationData, $message));
        }

        if($station_id == 1){
            return redirect('/stationdata1')
                         ->with('success');
        } else {
            return redirect('/stationdata2')
            ->with('success');
        }
       
    }

    if($station_id == 1){
        return redirect('/stationdata1')
                     ->with('error', 'Failed to fetch data from sensor API');
    } else {
        return redirect('/stationdata2')
        ->with('error','Failed to fetch data from sensor API');
    }
}

public function fetchAndStoreDeviceData()
{
    $url = 'http://16.171.199.207:3000/latest/device_status';
    $station_id = 2;
    $device_id = ($station_id == 2) ? 2 : 1;

    try {
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            // Save with status ON
            DeviceData::create([
                'timestamp' => $data['timestamp'],
                'signal_strength' => $data['Signal Strength (dBm)'],
                'pressure' => $data['Pressure (hPa)'],
                'battery_voltage' => $data['Battery Voltage (V)'],
                'temperature' => $data['Temperature (°C)'],
                'illuminance' => $data['Illuminance (lux)'],
                'humidity' => $data['Humidity (%)'],
                'device_Id' => $device_id,
                'status' => 'ON',
            ]);
        } else {
            // Save minimal data with status OFF
            DeviceData::create([
                'timestamp' => now(),
                'device_id' => $device_id,
                'status' => 'OFF',
            ]);
        }
    } catch (\Exception $e) {
        // In case of any error, also store OFF status
        DeviceData::create([
            'timestamp' => now(),
            'device_id' => $device_id,
            'status' => 'OFF',
        ]);
    }

    // Redirect based on station
    if ($station_id == 1) {
        return redirect('/stationdata1')->with('success', 'Device data fetched');
    } else {
        return redirect('/stationdata2')->with('success', 'Device data fetched');
    }
}

public function notifications()
{
    $notifications = auth()->user()->unreadNotifications;

    return view('station-manager.notifications', compact('notifications'));
}


public function BushogaStation()
    {
        $station = Station::where('id',1)->first();
        $stationdata = DeviceData::where('device_Id',1)      
        ->latest('timestamp')
        ->first();
        $data = Station_Data::where('station_id', $station->id)
        ->get();
        $startDate = Station_Data::where('station_id', 1)->orderBy('created_at', 'asc')->first()->created_at ?? null;
        $lastDate = Station_Data::where('station_id', 1)->orderBy('created_at', 'desc')->first()->created_at ?? null;
        $dataCount = $data->count();
     return view('stationdata.all_data',compact('data','stationdata','startDate','lastDate','dataCount','station'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
       
    }
    public function NshekeStation()
        {
            $station = Station::where('id',2)->first();
            $stationdata = DeviceData::where('device_Id',2)           
            ->latest('timestamp')
            ->first();
            $data = Station_Data::where('station_id', $station->id)
            ->get();
            $startDate = Station_Data::where('station_id', 2)->orderBy('created_at', 'asc')->first()->created_at ?? null;
            $lastDate = Station_Data::where('station_id', 2)->orderBy('created_at', 'desc')->first()->created_at ?? null;
            $dataCount = $data->count();
            
        return view('stationdata.all_data',compact('data','stationdata','startDate','lastDate','dataCount','station'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
        
        }

        public function sendemail()
        {
            $level = Station_Data::where('station_id', 1)->value('water_level');

            // Fetch the name of the station
            $location = Station::where('id', 1)->value('name');
            
           

            if (!is_null($level) && !is_null($location)) {
                // if ($level < 1) {
                    Mail::to('nathwyatt0@gmail.com')->send(new FloodNotificationEmail($level, $location));
                // }
            } else {
                \Log::error('Either water level or location is null for station ID 1');
            }
        }

}
