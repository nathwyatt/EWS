<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationCommunity extends Controller
{
    public function AllStations(){
        $stations = Station::get();
        // dd($stations);
    }
}
