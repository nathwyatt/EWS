@extends('layouts.dashboard')

@section('content')
<style>
    #map { height: 250px; }
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
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{$numUsers}}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user color-success"></i>
                </div>
                <a href="{{route('users.index')}}" class="small-box-footer color-dark">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{$numStations}}</h3>
                    <p>Stations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-building  color-warning"></i>
                </div>
                <a href="#" class="small-box-footer color-dark">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>20</h3>
                    <p>Notifications</p>
                </div>
                <div class="icon">
                    <i class="fas fa-bell color-info"></i>
                </div>
                <a href="{{'/datanotification'}}" class="small-box-footer color-dark">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
   </div> 

    <div class="content">
        <div class="row">
        <div class="col-lg-12 margin-tb"> 
            <div class="card-header">
                <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;">{{ $station1[0]->name }} Station on google map</h5>
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
//google streets
googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});
googleStreets.addTo(map);

//satelite
googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});
//googleSat.addTo(map);

// maker
var a = L.marker([-1.2316667, 30.3438889])
var site = a.bindPopup('EWS Muvumba').openPopup()
site.addTo(map);

console.log(singleMaker.toGeoJSON());

//layer controller
var baseMaps = {
"Over view Map": muvumba,
"Map with streets": googleStreets,
"Satelite map": googleSat,
};
var overlayMap = {
    "Marker": a
};
var control_layers= L.control.layers(baseMaps,overlayMap);
 control_layers.addTo(map)

//code
// var myIcon = L.icon({
//     iconUrl: 'image/icon.jpg',
//     iconSize: [38, 95],
//     iconAnchor: [22, 94],
//     popupAnchor: [-3, -76],
//     shadowUrl: 'my-icon-shadow.png',
//     shadowSize: [68, 95],
//     shadowAnchor: [22, 94]
// });
// L.marker([-1.231, 30.343], {icon: myIcon}).addTo(map);




</script>
@endsection
