<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FetchSensorData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:fetch-sensor-data';
    protected $signature = 'sensor:fetch';
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

            SensorData::create([
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
            ]);
            \Log::info('Sensor data fetched and stored successfully.', [
                'data' => $data
            ]);
            $this->info('Sensor data stored successfully.');
        } else {
            \Log::error('Failed to fetch sensor data from API.', [
                'url' => $url,
                'status_code' => $response->status(),
                'response' => $response->body()
            ]);
            $this->error('Failed to fetch data from API.');
        }
    }
}
