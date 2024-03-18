@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
            <div class="card-header justify-content-between text-center">
                <h2 style="font-family: 'Bayon'">Chats</h2>
                <div class="date-range-report">
                    <span></span>
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