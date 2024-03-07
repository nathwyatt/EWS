@extends('layouts.dashboard')

@section('content')

<div class="container">
    <section class="content">
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
            <div class="col-lg-4 col-3">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user color-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Total Users</div>
                            <div class="stat-digit">{{$numUsers}}</div>
                        </div>
                        <a href="{{'/stationdata'}}"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-3">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-server color-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Stations</div>
                            <div class="stat-digit">{{$numStations}}</div>
                        </div>
                        <a href="{{'/stationdata'}}"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-3">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-email color-danger border-danger"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Farmers</div>
                            <div class="stat-digit">20</div>
                        </div>
                        <a href="{{'/datanotification'}}"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container chart-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;">{{ $station1[0]->name }} Station</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chart1" style="width:100%;max-width:600px"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 12px;">{{ $station2[0]->name }} Station</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="chart2" style="width:100%;max-width:600px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
