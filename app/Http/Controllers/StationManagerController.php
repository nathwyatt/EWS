<?php

namespace App\Http\Controllers;
use App\Models\Station;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StationManagerController extends Controller
{
   public function index()
   {
      $data = DB::table('station_data')->get('id');
   $station =Station::get('id');
   return view('station-manager.index',compact('station','data'));
   }
   public function create()
   {

   }
}
