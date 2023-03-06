<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Station;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numUsers = User::count();
        $numStations = Station::count();
        $numRoles = Role::count();
    
        return view('home', compact('numUsers', 'numStations', 'numRoles'));
        //return view('home');
    }
}
