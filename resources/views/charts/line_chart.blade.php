
@extends('layouts.stations')

@section('content')
<div class="container">
    <div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">
        <div class="card-header justify-content-between text-center">
            <h2 style="font-family: 'Bayon'">Charts</h2>
            <div class="date-range-report">
                <span></span>
            </div>
        </div>
    </div>
    <div class="container chart-container">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 15px;">Data charts</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 15px;">Flood Probability</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="text-center" style="font-family: 'Your-Desired-Font-Family'; font-size: 15px;">Overall Data Variables with Percentages</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <canvas id="chart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p class="text-center">Charts  displays all dates and data, indicates the probability of floods at certain times according to dates, and  shows the overall data variables with percentages.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx1 = document.getElementById('chart1').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar', // Change chart type to bar
        data: {
            labels: {!! json_encode($timeData) !!}, // Use time data as labels (assuming it represents days)
            datasets: [
                {
                    label: 'Temperature',
                    data: {!! json_encode($temperatureData) !!}, // Data for temperature
                    backgroundColor: 'rgba(255, 99, 132, 0.6)', // Temperature color
                },
                {
                    label: 'Water Level',
                    data: {!! json_encode($waterLevelData) !!}, // Data for water level
                    backgroundColor: 'rgba(54, 162, 235, 0.6)', // Water level color
                },
                {
                    label: 'Soil Moisture',
                    data: {!! json_encode($soilMoistureData) !!}, // Data for soil moisture
                    backgroundColor: 'rgba(75, 192, 192, 0.6)', // Soil moisture color
                },
                {
                    label: 'Humidity',
                    data: {!! json_encode($humidityData) !!}, // Data for humidity
                    backgroundColor: 'rgba(255, 206, 86, 0.6)', // Humidity color
                },
            ]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Station Data Comparison'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

//     var sumWaterLevel = {!! json_encode(array_sum($waterLevelData)) !!};
//     var numDataPoints = {!! json_encode(count($waterLevelData)) !!};
//     var averageWaterLevel = sumWaterLevel / numDataPoints;
//     var waterLevelThreshold = {!! json_encode($waterLevelThreshold) !!};
//     var floodChance = (averageWaterLevel / waterLevelThreshold) * 100;

//     // Chart configuration for chart2 (Line chart)
//  // Add analysis for floods
//  var floods = {!! json_encode($waterLevelData) !!}.map(function(dataPoint) {
//         return dataPoint >= {!! json_encode($waterLevelThreshold) !!} ? dataPoint : null; // Set flood values to actual values, others to null
//     });

//     // Chart configuration for chart2 (Line chart for flood probability)
//     var ctx2 = document.getElementById('chart2').getContext('2d');
//     var chart2 = new Chart(ctx2, {
//         type: 'line', // Change chart type to line
//         data: {
//             labels: {!! json_encode($timeData) !!},
//             datasets: [
//                 {
//                     label: 'Flood Indicator',
//                     data: {!! json_encode($waterLevelData) !!},
//                     borderColor: 'rgba(255, 0, 0, 0.6)', // Red color for flood indicator
//                     borderWidth: 2,
//                     fill: false,
//                 },
//             ]
//         },
//         options: {
//             responsive: true,
//             scales: {
//                 x: {
//                     stacked: true,
//                 },
//                 y: {
//                     beginAtZero: true,
//                     suggestedMax: 400, // Maximum scale set to 400
//                 }
//             },
//             plugins: {
//                 title: {
//                     display: true,
//                     text: 'Flood Probability'
//                 }
//             },
//             elements: {
//                 line: {
//                     tension: 0 // Disable line tension for straight lines between points
//                 }
//             },
//             annotation: {
//                 annotations: [{
//                     type: 'line',
//                     mode: 'horizontal',
//                     scaleID: 'y',
//                     value: 400,
//                     borderColor: 'rgba(0, 0, 0, 0.6)',
//                     borderWidth: 2,
//                     label: {
//                         enabled: true,
//                         content: 'Threshold (400)'
//                     }
//                 }]
//             }
//         }
//     });
// </script>
<script>
    // Determine flood warnings based on water level threshold
    var waterLevelData = {!! json_encode($waterLevelData) !!};
    var waterLevelThreshold = {!! json_encode($waterLevelThreshold) !!};
    var floodWarnings = waterLevelData.map(function(waterLevel) {
        return waterLevel > waterLevelThreshold;
    });

    // Chart configuration for chart3 (Line chart for water level with flood warnings)
    var ctx3 = document.getElementById('chart2').getContext('2d');
    var chart3 = new Chart(ctx3, {
        type: 'line', // Use line chart type
        data: {
            labels: {!! json_encode($timeData) !!}, // Use time data as labels (assuming it represents days)
            datasets: [
                {
                    label: 'Water Level',
                    data: waterLevelData, // Water level data
                    borderColor: 'rgba(54, 162, 235, 0.6)', // Water level color
                    fill: false,
                    pointBackgroundColor: floodWarnings.map(function(hasWarning) {
                        return hasWarning ? 'rgba(255, 0, 0, 1)' : 'rgba(54, 162, 235, 0.6)';
                    }), // Change point color for flood warnings
                },
            ]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Water Level Analysis with Flood Warnings (Line Chart)'
                }
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    beginAtZero: true, // Start y-axis from zero
                    suggestedMax: 400, // Maximum scale value
                }
            }
        }
    });
</script>
<script>
    // Get the maximum value among all data arrays
    var maxDataValue = Math.max(
        Math.max(...{!! json_encode($temperatureData) !!}),
        Math.max(...{!! json_encode($waterLevelData) !!}),
        Math.max(...{!! json_encode($soilMoistureData) !!}),
        Math.max(...{!! json_encode($humidityData) !!})
    );

    // Calculate the maximum scale value (rounded up to the nearest hundred)
    var maxScaleValue = Math.ceil(maxDataValue / 100) * 100;

    // Chart configuration for chart3 (Line chart for river variables)
    var ctx3 = document.getElementById('chart3').getContext('2d');
    var chart3 = new Chart(ctx3, {
        type: 'line', // Change chart type to line for better visibility
        data: {
            labels: {!! json_encode($timeData) !!}, // Use time data as labels (assuming it represents days)
            datasets: [
                {
                    label: 'Temperature',
                    data: {!! json_encode($temperatureData) !!}, // Data for temperature
                    borderColor: 'rgba(255, 99, 132, 0.6)', // Temperature color
                    fill: false,
                },
                {
                    label: 'Water Level',
                    data: {!! json_encode($waterLevelData) !!}, // Data for water level
                    borderColor: 'rgba(54, 162, 235, 0.6)', // Water level color
                    fill: false,
                },
                {
                    label: 'Soil Moisture',
                    data: {!! json_encode($soilMoistureData) !!}, // Data for soil moisture
                    borderColor: 'rgba(75, 192, 192, 0.6)', // Soil moisture color
                    fill: false,
                },
                {
                    label: 'Humidity',
                    data: {!! json_encode($humidityData) !!}, // Data for humidity
                    borderColor: 'rgba(255, 206, 86, 0.6)', // Humidity color
                    fill: false,
                },
            ]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'River Variables Analysis (Line Chart)'
                }
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    min: 0, // Minimum scale value
                    max: maxScaleValue, // Maximum scale value
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

