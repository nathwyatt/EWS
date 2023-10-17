@extends('layouts.dashboard')

@section('content')
<style>
.card-deck .card {
    margin-bottom: 0;
}

.card-green {
    background-color: #28a745;
    color: #fff;
}

.card-orange {
    background-color: #fd7e14;
    color: #fff;
}

.card-body {
    padding: 10px;
}

.card-footer {
    padding: 10px;
}

.chart-container {
    margin-top: 20px;
}
</style>

<div class="container">
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="breadcrumb-item active">Hi {{Auth::user()->name}}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card card-warning">
                        <div class="card-body text-center">
                            <i class="fa fa-users" aria-hidden="true"></i><br>
                            <small>Members</small>
                            <p>{{$numUsers}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('users.index')}}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card card-green">
                        <div class="card-body text-center">
                            <i class="fa fa-tasks" aria-hidden="true"></i><br>
                            <small>Stations</small>
                            <p>{{$numStations}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('stations.index') }}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-deck">
                    <div class="card card-orange">
                        <div class="card-body text-center">
                            <i class="fa fa-users" aria-hidden="true"></i><br>
                            <small>Farmers</small>
                            <p>20</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container chart-container">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;"> 
                        {{ $station1[0]->name }} Station
                       </h5>
                        </div>
                        <div class="card-body">
                            <canvas id="chart1" style="width:100%;max-width:600px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;"> 
                        {{ $station2[0]->name }} Station
                       </h5>
                        </div>
                        <div class="card-body">
                            <canvas id="chart2" style="width:100%;max-width:600px"></canvas>
                        </div>
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
@endsection
