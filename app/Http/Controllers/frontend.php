<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\About;
use App\Models\Contactus;
use Illuminate\Http\Request;

class frontend extends Controller
{
    public function index()
    {
        // $station=Station::all();
        
        return view('welcome');
    }

    public function about()
    {
        $about=About::all();
        return view('Frontend.index',compact('about'));
    }

    public function contactus()
    {
        $contactus=Contactus::get();
        return view('welcome',compact('contactus'));
    }
}
