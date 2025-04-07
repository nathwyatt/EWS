@extends('layouts.dashboard')

@section('content')
<style>
    @keyframes blinker {
        50% { opacity: 0; }
    }

    .blink {
        animation: blinker 1s linear infinite;
        position: relative;
    }

    .blink::before {
        content: '\2605'; /* Unicode for star */
        position: absolute;
        top: -8px;
        right: -7px;
        color: black;
    }
</style>
  <div class="container">
     <div class="row">
         <div class="col-lg-12 margin-tb">
               <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
               <h3 class="custom-heading2">Hi <span class="custom-span">{{Auth::user()->name}}</span></h3>
               
                    <div class="current-day-icon">
                        <i class="day-icon fas fa-sun"></i>
                        <i class="night-icon fas fa-moon"></i>
                    </div>
                    <div class="current-day">{{ \Carbon\Carbon::now()->format('l') }}</div>
                    <div class="current-date">{{ \Carbon\Carbon::now()->format('F j, Y') }}</div>
                    <div class="current-time">{{ \Carbon\Carbon::now()->format('h:i A') }}</div>
              
               </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon shadow-sm" style="background-color: #2ed3aa;">
                        <i class="fa fa-users" style="color: #fff;"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.farmers')</span>
                        <span class="info-box-number">{{ $numfarmers }}</span>
                    </div>
                </div>
                <a href="{{ '/stationdata' }}" class="small-box-footer" style="color:#2ed3aa;">
                    More info <i class="fas fa-arrow-circle-right" style="color:#2ed3aa;"></i>
                </a>
            </div>
        
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon shadow-sm" style="background-color: #2ed3aa;">
                        <i class="fa fa-database" style="color: #fff;"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.number_of_data')</span>
                        <span class="info-box-number">{{ $numdata }}</span>
                    </div>
                </div>
                <a href="{{ '/stationdata' }}" class="small-box-footer" style="color:#2ed3aa;">
                    More info <i class="fas fa-arrow-circle-right" style="color:#2ed3aa;"></i>
                </a>
            </div>
        
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon shadow-sm" style="background-color: #2ed3aa;">
                        <i class="fa fa-bell" style="color: #fff;"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.notification')</span>
                        <span class="info-box-number">{{ $unreadNotificationsCount }}</span>
                    </div>
                </div>
                <a href="{{route('notifications.history')}}" class="small-box-footer" style="color:#2ed3aa;">
                    More info <i class="fas fa-arrow-circle-right" style="color:#2ed3aa;"></i>
                </a>
            </div>
        </div>
        
 
     <div class="row">
        <div class="col-md-12">
            <div class="small-box ">
                <a href="{{'/stationdata'}}"  class="badge  bg-light text-center"> Current weather data at {{ Auth::user()->station->name }} station</a>
                @if (!empty($data))
                @php $latestData = $data->latest('created_at')->first(); @endphp
                <div class="container">
                    <p class="ti-time"> {{ $latestData->created_at }} </p>
                    <div class="row">
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon color-dark"><i class="fas fa-tint"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Water Level (river)</span>
                                    <span class="info-box-number">{{ $latestData->water_level }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon color-success"><i class="fas fa-thermometer-half"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Air Temperature (°C)</span>
                                    <span class="info-box-number">{{ $latestData->air_temperature }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon color-warning"><i class="fas fa-tint-slash"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Air Humidity (%)</span>
                                    <span class="info-box-number">{{ $latestData->air_humidity }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon bg-teal"><i class="fas fa-cloud-showers-heavy"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rainfall Accumulated (mm)</span>
                                    <span class="info-box-number">{{ $latestData->rainfall_accumulated }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-tint"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rainfall Hourly (mm/h)</span>
                                    <span class="info-box-number">{{ $latestData->rainfall_hourly }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-tachometer-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Barometric Pressure (hPa)</span>
                                    <span class="info-box-number">{{ $latestData->barometric_pressure }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon color-info"><i class="fas fa-cloud-rain"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Soil Moisture (%)</span>
                                    <span class="info-box-number">{{ $latestData->soil_volumetric_water_content }}</span>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-6 margin-tb">
                            <div class="info-box">
                                <span class="info-box-icon color-primary"><i class="fas fa-temperature-high"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Soil Temperature (°C)</span>
                                    <span class="info-box-number">{{ $latestData->soil_temperature }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Display overall status with appropriate color and blinking -->
                {{-- <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <h4 class="custom-span">
                            @lang('public.status') <i class="fas fa-arrow-circle-down bg-light"></i>
                            <div class="card-header">
                                <span class="badge bg-success @if($overallStatus == 'Normal') blink @endif">@lang('public.normal')</span>
                                <span class="badge bg-warning @if($overallStatus == 'Warning') blink @endif">@lang('public.warning')</span>
                                <span class="badge bg-danger @if($overallStatus == 'Danger') blink @endif">@lang('public.danger')</span>
                            </div>
                        </h4>
                        <div class="mt-3">
                            @if(!empty($message))
                                <div class="alert alert-info" role="alert">
                                  {!! $message !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div> --}}
            @endif
            
                <a href="{{'/stationdata'}}" class="small-box-footer bg-light">View more records <i class="fas fa-arrow-circle-right bg-light"></i></a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="small-box ">
                <a href="{{'/stationdata'}}"  class="badge  bg-light text-center"> Device status</a>
                <div class="container">
                    <p class="ti-time"> {{ $device_status->timestamp}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Device Status</th>
                                <th>Signal Strength (dBm)</th>
                                <th>Pressure (hPa)</th>
                                <th>Battery Voltage (V)</th>
                                <th>Temperature (°C)</th>
                                <th>Illuminance (lux)</th>
                                <th>Humidity (%)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $device_status->status }}</td>
                                <td>{{ $device_status->signal_strength}}</td>
                                <td>{{ $device_status->pressure	}}</td>
                                <td>{{ $device_status->battery_voltage }}</td>
                                <td>{{ $device_status->temperature}}</td>
                                <td>{{ $device_status->illuminance}}</td>
                                <td>{{ $device_status->humidity}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p  class="small-box-footer bg-light"></p>

            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-6">
            <div class="small-box bg-white">
                <a href="{{'/community'}}" class="badge bg-white text-center">farmers around {{ Auth::user()->station->name }}</a>
                <div class="container">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>farmerID</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($com as $key => $com)
                                    <tr>
                                        <td>{{$com->id}}</td>
                                        <td>{{ $com->fname }}</td>
                                        <td>{{ $com->lname }}</td>
                                        <td>{{ $com->email }}</td>
                                        <td>{{ $com->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="small-box bg-white">
                <a href="" class="badge bg-white text-center">Chart for {{ Auth::user()->station->name }} data</a>
        
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <canvas id="myChart" style="width:100%;max-width:1000px"></canvas>
                
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: {!! json_encode($timeData) !!},
                            datasets: [
                                {
                                    label: 'Water Level',
                                    data: {!! json_encode($waterLevel) !!},
                                    borderColor: 'rgba(0, 128, 255, 1)',  // Blue color for water level
                                    backgroundColor: 'rgba(0, 128, 255, 0.2)',  // Light blue fill
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Air Temp (°C)',
                                    data: {!! json_encode($airTemperature) !!},
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Air Humidity (%)',
                                    data: {!! json_encode($airHumidity) !!},
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Barometric Pressure (hPa)',
                                    data: {!! json_encode($barometricPressure) !!},
                                    borderColor: 'rgba(255, 206, 86, 1)',
                                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Light Intensity (W/m²)',
                                    data: {!! json_encode($lightIntensity) !!},
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Wind Direction (°)',
                                    data: {!! json_encode($windDirection) !!},
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Wind Speed (m/s)',
                                    data: {!! json_encode($windSpeed) !!},
                                    borderColor: 'rgba(255, 159, 64, 1)',
                                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Rainfall Accumulated (mm)',
                                    data: {!! json_encode($rainfallAccumulated) !!},
                                    borderColor: 'rgba(0, 128, 128, 1)',
                                    backgroundColor: 'rgba(0, 128, 128, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Rainfall Hourly (mm/h)',
                                    data: {!! json_encode($rainfallHourly) !!},
                                    borderColor: 'rgba(128, 0, 128, 1)',
                                    backgroundColor: 'rgba(128, 0, 128, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Soil Temp (°C)',
                                    data: {!! json_encode($soilTemperature) !!},
                                    borderColor: 'rgba(0, 0, 255, 1)',
                                    backgroundColor: 'rgba(0, 0, 255, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                },
                                {
                                    label: 'Soil Moisture (%)',
                                    data: {!! json_encode($soilMoisture) !!},
                                    borderColor: 'rgba(0, 100, 0, 1)',
                                    backgroundColor: 'rgba(0, 100, 0, 0.2)',
                                    fill: false,
                                    tension: 0.3
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Environmental Data (Station Readings)'
                                },
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }
                    });
                </script>
                
                <style>
                .custom-bg-info-40 {
                background-color: rgba(135, 206, 235, 0.4);
                }
                </style>
                       <script>
                    $(document).ready(function() {
                        $('#example1').DataTable({
                            responsive: true,
                            paging: true,
                            pageLength:5
                        });
                    });
                </script>
              
            </div>
        </div>
      </div>
   </div>
@endsection