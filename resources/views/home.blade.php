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
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-box bg-info">
                <span class="info-box-icon "><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('public.user_management')</span>
                    <span class="info-box-number">{{$numUsers}}</span>
                </div>
            </div>
            <a href="{{route('users.index')}}" class="small-box-footer color-success">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
           
            <div class="info-box bg-info">
                <span class="info-box-icon "><i class="fa fa-building"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('public.station_management')</span>
                    <span class="info-box-number">{{$numStations}}</span>
                </div>
            </div>
            <a href="#" class="small-box-footer color-success">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="info-box bg-info">
                <span class="info-box-icon "><i class="fa fa-bell"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">@lang('public.notification')</span>
                    <span class="info-box-number">20</span>
                </div>
            </div>
            <a href="{{'/datanotification'}}" class="small-box-footer color-success">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
        </div>
   </div> 



    <div class="row mt-3">
        <div class="col-md-6 text-center">
            <h4 class="custom-heading2 custom-span">
                Station 1 @lang('public.status') <i class="fas fa-arrow-circle-down bg-light"></i>
                <div class="card-header">
                    <span class="badge bg-success @if($overallStatus1 == 'Normal') blink @endif">@lang('public.normal')</span>
                    <span class="badge bg-warning @if($overallStatus1 == 'Warning') blink @endif">@lang('public.warning')</span>
                    <span class="badge bg-danger @if($overallStatus1 == 'Danger') blink @endif">@lang('public.danger')</span>
                </div>
            </h4>
        </div>
        <div class="col-md-6 text-center">
            <h4 class="custom-heading2 custom-span">
                Station 2 @lang('public.status') <i class="fas fa-arrow-circle-down bg-light"></i>
                <div class="card-header">
                    <span class="badge bg-success @if($overallStatus2 == 'Normal') blink @endif">@lang('public.normal')</span>
                    <span class="badge bg-warning @if($overallStatus2 == 'Warning') blink @endif">@lang('public.warning')</span>
                    <span class="badge bg-danger @if($overallStatus2 == 'Danger') blink @endif">@lang('public.danger')</span>
                </div>
            </h4>
        </div>
    </div>
    <div class="content">
        <div class="row">
        <div class="col-lg-12 margin-tb"> 
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
                    text: '{{ $station1[0]->name}} Station Data Comparison'
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
                    text: '{{ $station2[0]->name}} Station Data Comparison'
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
var map = L.map('map').setView([-1.9437056, 29.8805778], 8);

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

var a = L.marker([-1.2316667, 30.3438889]).addTo(map);
a.bindPopup('EWS Muvumba').openPopup();

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
