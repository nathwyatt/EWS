<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station_Data;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PredictionController extends Controller
{
    public function index()
    {
        $id = Auth::user()->station->id;

        // Fetch all data from the Station_Data table for the specified station
        $data = Station_Data::where('station_id', $id)
            ->latest('created_at')
            ->get();

        // Simulate predictions based on conditions
        $predictions = [];
        foreach ($data as $datum) {
            if ($datum->water_level < 10) {
                $status = 'Floods';
            } elseif ($datum->water_level > 200) {
                $status = 'Droughts';
            } else {
                $status = 'Normal';
            }

            $predictions[] = [
                'id' => $datum->id,
                'water_level' => $datum->water_level,
                'prediction' => $status,
                'timestamp' => $datum->created_at->format('Y-m-d H:i:s'),
            ];
        }

        // Group predictions by month
        $groupedPredictions = collect($predictions)->groupBy(function ($item) {
            return Carbon::parse($item['timestamp'])->format('Y-m');
        });

        // Calculate monthly counts
        $monthlyCounts = $groupedPredictions->map(function ($monthPredictions) {
            $counts = [
                'Floods' => 0,
                'Droughts' => 0,
                'Normal' => 0,
            ];

            foreach ($monthPredictions as $prediction) {
                if (array_key_exists($prediction['prediction'], $counts)) {
                    $counts[$prediction['prediction']]++;
                }
            }

            return $counts;
        });

        // Get the most recent month from the data
        $recentMonth = $monthlyCounts->keys()->last();
        $recentData = $monthlyCounts->only($recentMonth);

        // Prepare future predictions based on recent months
        $futurePredictions = [];
        $predictionLabels = ['Floods', 'Droughts', 'Normal'];

        foreach (range(1, 3) as $monthIncrement) {
            $futureDate = Carbon::parse($recentMonth)->addMonths($monthIncrement)->format('Y-m');
            
            // Simple prediction based on recent month's counts
            $futurePrediction = $predictionLabels[array_rand($predictionLabels)]; // Randomly assign for simplicity

            $futurePredictions[] = [
                'prediction' => $futurePrediction,
                'timestamp' => $futureDate,
            ];
        }

        return view('prediction', compact('monthlyCounts', 'predictions', 'futurePredictions'));
    }
}
