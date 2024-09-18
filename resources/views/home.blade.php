@extends('layouts.dashboard')

@section('content')

<style>
    #map { height: 250px; }
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
                    <span class="info-box-text">@lang('public.user_management')</span>
                    <span class="info-box-number">{{$numUsers}}</span>
                </div>
            </div>
            <a href="{{route('users.index')}}" class="small-box-footer"style="color:#2ed3aa;">
                More info <i class="fas fa-arrow-circle-right"style="color:#2ed3aa;"></i>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon shadow-sm" style="background-color: #2ed3aa;">
                    <i class="fa fa-building" style="color: #fff;"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('public.station_management')</span>
                    <span class="info-box-number">{{$numStations}}</span>
                </div>
            </div>
            <a href="#" class="small-box-footer"style="color:#2ed3aa;">
                More info <i class="fas fa-arrow-circle-right"style="color:#2ed3aa;"></i>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
                <span class="info-box-icon shadow-sm" style="background-color: #2ed3aa;">
                    <i class="fa fa-bell" style="color: #fff;"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('public.notification')</span>
                    <span class="info-box-number">20</span>
                </div>
            </div>
            <a href="{{'/datanotification'}}" class="small-box-footer"style="color:#2ed3aa;">
                More info <i class="fas fa-arrow-circle-right"style="color:#2ed3aa;"></i>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header" style="background-color: #2ed3aa;">
                    <h5 class="card-title">Station Info</h5>   
                </div>
                <!-- /.card-header -->
    
                <div class="card-body">
                    <div class="row mb-3">
                        <!-- Station 1 Info -->
                        <div class="col-md-6">
                            <h6>Name: {{ $station1->name ?? 'N/A' }}</h6>
                            <p>Manager: {{ $manager1->name ?? 'N/A' }}</p>
                            <p>Current Farmers: {{ $farmers1 ?? 0 }}</p>
                            <p>Status:
                                @if($overallStatus1 == 'Normal')
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle"></i> @lang('public.normal')
                                    </span>
                                @elseif($overallStatus1 == 'Warning')
                                    <span class="badge bg-warning">
                                        <i class="bi bi-exclamation-circle"></i> @lang('public.warning')
                                    </span>
                                @elseif($overallStatus1 == 'Danger')
                                    <span class="badge bg-danger">
                                        <i class="bi bi-x-circle"></i> @lang('public.danger')
                                    </span>
                                @endif
                            </p>
                        </div>
    
                        <!-- Station 2 Info -->
                        <div class="col-md-6">
                            <h6>Name: {{ $station2->name ?? 'N/A' }}</h6>
                            <p>Manager: {{ $manager2->name ?? 'N/A' }}</p>
                            <p>Current Farmers: {{ $farmers2 ?? 0 }}</p>
                            <p>Status:
                                @if($overallStatus2 == 'Normal')
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle"></i> @lang('public.normal')
                                    </span>
                                @elseif($overallStatus2 == 'Warning')
                                    <span class="badge bg-warning">
                                        <i class="bi bi-exclamation-circle"></i> @lang('public.warning')
                                    </span>
                                @elseif($overallStatus2 == 'Danger')
                                    <span class="badge bg-danger">
                                        <i class="bi bi-x-circle"></i> @lang('public.danger')
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    
  

    <div class="content">
        <div class="row">
            <div class="col-lg-12 margin-tb"> 
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;"> find stations on google map</h5>
                    </div> 
                    <div class="card-body">
                        <div id="map">
                        
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
    </div>
    <div class="container chart-container">
            <div class="card">  
                <div class="card-header">
                    <h5 class="text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 15px;">Data chats</h5>
                </div>    
                <div class="row">
                    <div class="col-md-6">
                            <div class="card-body">
                                <canvas id="chart1" style="width:100%;max-width:600px"></canvas>
                            </div>
                    </div>
                    <div class="col-md-6">
                
                        <div class="card-body">
                            <canvas id="chart2" style="width:100%;max-width:600px"></canvas>
                        </div>
                    
                    </div>
                </div>
            </div>
    </div>

  

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('chart1').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: {!! json_encode($timeData1) !!},
            datasets: [
                {
                    label: 'Temperature',
                    data: {!! json_encode($temperatureData1) !!},
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                },
                {
                    label: 'Water Level',
                    data: {!! json_encode($waterLevelData1) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                },
                {
                    label: 'Soil Moisture',
                    data: {!! json_encode($soilMoistureData1) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                },
                {
                    label: 'Humidity',
                    data: {!! json_encode($humidityData1) !!},
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
                    text: '{{ $station1->name}} Station Data Comparison'
                }
            }
        }
    });

    var ctx2 = document.getElementById('chart2').getContext('2d');
    var chart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: {!! json_encode($timeData2) !!},
            datasets: [
                {
                    label: 'Temperature',
                    data: {!! json_encode($temperatureData2) !!},
                    backgroundColor: 'rgba(255, 159, 64, 0.6)', // Different color
                },
                {
                    label: 'Water Level',
                    data: {!! json_encode($waterLevelData2) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                },
                {
                    label: 'Soil Moisture',
                    data: {!! json_encode($soilMoistureData2) !!},
                    backgroundColor: 'rgba(153, 102, 255, 0.6)', // Different color
                },
                {
                    label: 'Humidity',
                    data: {!! json_encode($humidityData2) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
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
                    text: '{{ $station2->name}} Station Data Comparison'
                }
            }
        }
    });
</script>
<style>
    .custom-bg-info-40 {
        background-color: rgba(135, 206, 235, 0.4);
    }
    .chart-container {
        margin-top: 20px;
    }
</style>
<script>
var map = L.map('map').setView([-1.944880, 30.062380], 8);

var muvumba = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
})
muvumba.addTo(map); 

var googleStreets = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});
googleStreets.addTo(map);

var googleSat = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

 


var baseMaps = {
    "Over view Map": muvumba,
    "Map with streets": googleStreets,
    "Satellite map": googleSat
};

var overlayMap = {
    "Marker": a
};

var control_layers = L.control.layers(baseMaps, overlayMap);
control_layers.addTo(map);
</script>

@endsection
