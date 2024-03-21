@extends('layouts.stations')

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
       
            <div class="col-lg-4 col-4 margin-tb">

             <div class="info-box bg-info">
                    <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.farmers')</span>
                        <span class="info-box-number">{{ $numfarmers }}</span>
                    </div>
                    <a href="{{'/stationdata'}}"></a>
                </div>
            </div>


            <div class="col-lg-4 col-4 margin-tb">

                <div class="info-box bg-info">
                    <span class="info-box-icon "><i class="fa fa-database"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.number_of_data')</span>
                        <span class="info-box-number">{{ $numdata }}</span>
                    </div>
                    <a href="{{'/stationdata'}}"></a>
                </div>
            </div>
         
            <div class="col-lg-4 col-4 margin-tb">

                <div class="info-box bg-info">
                    <span class="info-box-icon "><i class="fa fa-bell"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">@lang('public.notification')</span>
                        <span class="info-box-number">{{$unreadNotificationsCount}}</span>
                    </div>
                    <a href="{{'/datanotification'}}"></a>
                </div>
            </div>
          <!-- ./col -->
          
     </div>
    
 
     <div class="row">
        <div class="col-md-12">
            <div class="small-box ">
                <a href="{{'/stationdata'}}"  class="badge  bg-light text-center"> Current weather data at {{ Auth::user()->station->name }} station</a>
                @if (!empty($data))
                    @php $latestData = $data->latest('created_at')->first(); @endphp
                    <div class="container">
                        <p class="ti-time ">  {{ $latestData->created_at }} </p>
                        <div class="row">
                            <div class="col-lg-3 col-3 margin-tb">
                                <div class="info-box">
                                    <span class="info-box-icon color-dark"><i class="fas fa-tint"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">@lang('public.water_level')</span>
                                        <span class="info-box-number">{{ $latestData->water_level }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-3 margin-tb">
                                <div class="info-box ">
                                    <span class="info-box-icon color-success"><i class="fas fa-thermometer-half"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">@lang('public.temperature')</span>
                                        <span class="info-box-number">{{ $latestData->temperature }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 margin-tb">
                                <div class="info-box ">
                                    <span class="info-box-icon color-warning"><i class="fas fa-tint-slash"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">@lang('public.humidity')</span>
                                        <span class="info-box-number">{{ $latestData->hummidity }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-3">
                                <div class="info-box ">
                                    <span class="info-box-icon color-info"><i class="fas fa-cloud-rain"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">@lang('public.soil_moisture')</span>
                                        <span class="info-box-number">{{ $latestData->soil_moisture }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Display overall status with appropriate color and blinking -->
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <h4 class="custom-span">
                            @lang('public.status') <i class="fas fa-arrow-circle-down bg-light"></i>
                            <div class="card-header">
                                <span class="badge bg-success @if($overallStatus == 'Normal') blink @endif">@lang('public.normal')</span>
                                <span class="badge bg-warning @if($overallStatus == 'Warning') blink @endif">@lang('public.warning')</span>
                                <span class="badge bg-danger @if($overallStatus == 'Danger') blink @endif">@lang('public.danger')</span>
                            </div>
                        </h4>
                    </div>
                </div>
                @endif
                <a href="{{'/stationdata'}}" class="small-box-footer bg-light">All Station_data records <i class="fas fa-arrow-circle-right bg-light"></i></a>
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
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: {!! json_encode($timeData) !!},
                        datasets: [
                            {
                                label: 'Temperature',
                                data: {!! json_encode($temperatureData) !!},
                                backgroundColor: 'rgba(255, 99, 132, 0.6)',
                            },
                            {
                                label: 'Water Level',
                                data: {!! json_encode($waterLevelData) !!},
                                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            },
                            {
                                label: 'Soil Moisture',
                                data: {!! json_encode($soilMoistureData) !!},
                                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            },
                            {
                                label: 'Humidity',
                                data: {!! json_encode($humidityData) !!},
                                backgroundColor: 'rgba(255, 206, 86, 0.6)',
                            },
                        ]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                stacked: true,
                            },
                            y: {
                                beginAtZero: true,
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Station Data Comparison'
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