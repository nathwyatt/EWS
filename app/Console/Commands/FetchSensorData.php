<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\Station_Data;
use App\Models\Station;
use App\Models\DeviceData;
use App\Models\User;


class FetchSensorData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:fetch-sensor-data';
    protected $signature = 'fetch:sensor-data'; 
    protected $description = 'Fetch sensor data from external API and store it in the database';
    // protected $description = 'Command description';

    /**
     * The console command description.
     *
     * @var string
     */
    

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'http://16.171.199.207:3000/latest/sensor_measurements';
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            // Check if this timestamp already exists
            $existing = Station_Data::where('timestamp', $data['timestamp'])->first();

            if (!$existing) {
                Station_Data::create([
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
                    'station_id' => 2,
                ]);

                $this->info('New sensor data saved!');
            } else {
                $this->info('No new data to save.');
            }
        } else {
            $this->error('Failed to fetch sensor data.');
        }
    }
}
