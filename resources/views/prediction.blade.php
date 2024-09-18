@extends('layouts.stations')

@section('content')
<style>
    .current-prediction {
        background-color: lightgreen;
    }
</style>

<div class="card-header justify-content-between text-center">
    <h2 style="font-family: 'Bayon'">Prediction Result</h2>
    <div class="date-range-report">
        <span></span>
    </div>
</div>

@if(isset($predictions) && count($predictions) > 0)
    @php
        $currentPrediction = $predictions[0]; 
        $predictionIcons = [
            'Normal' => '☀️',
            'Droughts' => '🌵',
            'Floods' => '🌧️'
        ];
    @endphp

    <div class="card mb-4 @if($currentPrediction['prediction'] == 'Normal') current-prediction @endif" style="background-color: #2ed3aa; color:#fff">
        <div class="card-body text-center">
            <h4 class="card-title text-light">Today's Prediction</h4>
            <p class="card-text" style="color: #000"><strong>Date:</strong> {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
            <p class="card-text" style="color: #000">
                <strong>Prediction:</strong> {{ $currentPrediction['prediction'] }} 
                {{ $predictionIcons[$currentPrediction['prediction']] ?? '🔍' }}
            </p>
            <div class="mt-3">
                @foreach($predictionIcons as $prediction => $icon)
                    <span class="d-inline-block p-2" style="border: 1px solid 
                    {{ $currentPrediction['prediction'] == $prediction ? 'white' : 'transparent' }};">
                        {{ $prediction }} {{ $icon }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Recent Predictions</h3>
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prediction</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($predictions as $prediction)
                        <tr>
                            <td>{{ $prediction['id'] }}</td>
                            <td style="color: 
                                @if($prediction['prediction'] == 'Normal') green 
                                @elseif($prediction['prediction'] == 'Droughts') blue 
                                @elseif($prediction['prediction'] == 'Floods') red 
                                @endif;">
                                {{ $prediction['prediction'] }}
                            </td>
                            <td>{{ $prediction['timestamp'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <canvas id="predictionChart" width="400" height="400"></canvas>
        </div>
    </div>

    <h3 class="text-center">Future Predictions (Next 3 Months)</h3>
    <div class="card mb-4">
        <div class="card-body text-center">
            @if(isset($futurePredictions) && count($futurePredictions) > 0)
                @foreach($futurePredictions as $futurePrediction)
                    <p class="card-text" style="color: #000">
                        <strong>Month:</strong> {{ $futurePrediction['timestamp'] }}
                        <strong>Prediction:</strong> {{ $futurePrediction['prediction'] }}
                        {{ $predictionIcons[$futurePrediction['prediction']] ?? '🔍' }}
                    </p>
                @endforeach
            @else
                <p>No future prediction results available</p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#example').DataTable({
                "pageLength": 10,
                "searching": false
            });

            var monthlyCounts = @json($monthlyCounts);
            
            var ctx = document.getElementById('predictionChart').getContext('2d');

            // Prepare data for the bar chart
            var labels = Object.keys(monthlyCounts);
            var floodCounts = labels.map(month => monthlyCounts[month]['Floods'] || 0);
            var droughtCounts = labels.map(month => monthlyCounts[month]['Droughts'] || 0);
            var normalCounts = labels.map(month => monthlyCounts[month]['Normal'] || 0);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Floods',
                            data: floodCounts,
                            backgroundColor: '#ff6384'
                        },
                        {
                            label: 'Droughts',
                            data: droughtCounts,
                            backgroundColor: '#36a2eb'
                        },
                        {
                            label: 'Normal',
                            data: normalCounts,
                            backgroundColor: '#4bc0c0'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    var label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed.y !== null) {
                                        label += context.parsed.y;
                                    }
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@else
    <p>No prediction results available</p>
@endif

@endsection
