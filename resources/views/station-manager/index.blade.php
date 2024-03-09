@extends('layouts.stations')

@section('content')

  <div class="container">
     <div class="row">
         <div class="col-lg-12 margin-tb">
               <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                   <h2 class="custom-heading">{{ Auth::user()->Station->name }} @lang('public.station')</h2>
               
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
                <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user color-success border-success"></i>
                        </div>
                        <div class="stat-content dib">
                            <div class="card-text">@lang('public.total farmers')</div>
                            <div class="stat-digit">{{ $numfarmers }}</div>
                        </div>
                        <a href="{{'/stationdata'}}"></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-4 margin-tb">
                <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-server color-warning border-warning"></i>
                        </div>
                        <div class="stat-content dib">
                            <div class="stat-text">River data</div>
                            <div class="stat-digit">{{ $numdata }}</div>
                        </div>
                        <a href="{{'/stationdata'}}"></a>
                    </div>
                </div>
            </div>
         
            <div class="col-lg-4 col-4 margin-tb">
                <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                    <div class="stat-widget-one flex-column flex-lg-row">
                        <div class="stat-icon dib"><i class="ti-email color-danger border-danger"></i>
                        </div>
                        <div class="stat-content dib">
                            <div class="card-text">notifications</div>
                            <div class="card-digit">{{$unreadNotificationsCount}}</div>
                        </div>
                        <a href="{{'/datanotification'}}"></a>
                    </div>
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
                            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib">
                                            <i class="wi wi-flood color-success" style="font-size: 38px;"></i>
                                        </div>
                                        <div class="stat-content dib ml-3">
                                            <div class="stat-text">Water level</div>
                                            <div class="stat-digit">{{ $latestData->water_level }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-lg-3 col-3 margin-tb">
                            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div class="stat-widget-one">
                                        <div class="stat-icon dib">
                                            <i class="wi wi-thermometer color-success" style="font-size: 38px;"></i>
                                        </div>
                                        <div class="stat-content dib ml-3">
                                            <div class="stat-text">Temperature</div>
                                            <div class="stat-digit">{{ $latestData->temperature }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 margin-tb">
                            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div class="stat-widget-one">
                                        <div class="stat-icon dib">
                                            <i class="wi wi-humidity color-success" style="font-size: 38px;"></i>
                                        </div>
                                        <div class="stat-content dib ml-4">
                                            <div class="stat-text">Humidity</div>
                                            <div class="stat-digit">{{ $latestData->hummidity }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-3">
                            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div class="stat-widget-one">
                                        <div class="stat-icon dib">
                                            <i class="wi wi-small-craft-advisory color-success" style="font-size: 38px;"></i>
                                        </div>
                                        <div class="stat-content dib ml-4">
                                            <div class="stat-text" style="text-align:center , margin:0px">Moisture</div>
                                            <div class="stat-digit">{{ $latestData->soil_moisture }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
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
                        {{-- <script>
                    $(document).ready(function() {
                        $('#example1').DataTable({
                            responsive: true,
                            paging: true,
                            pageLength:5
                        });
                    });
                </script> --}}
            </div>
        </div>
      </div>
   </div>
@endsection