<?php

namespace App\Http\Controllers;

use App\Models\Station_Data;
use Illuminate\Http\Request;

class StationDataController extends Controller
{
    public function index()
    {
        
        $data = Station_Data::latest()->paginate(5);
        dd($data);
     return view('stationdata.index',compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
       
    }
    
}
