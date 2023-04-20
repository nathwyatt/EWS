<?php

namespace App\Http\Controllers;

use App\Models\Station_Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StationDataController extends Controller
{
    public function index()
    {
        
        $data = DB::table('station_data')->latest()->paginate(5);
        return view('stationdata.index',compact('data'));
    }
    public function __invoke()
    {
        // Your controller logic goes here
    }
}
