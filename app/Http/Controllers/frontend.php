<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class frontend extends Controller
{
    public function index()
    {
        $station=Station::get();
        
        return view('welcome',compact('station'));
    }
}
