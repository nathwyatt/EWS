<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use App\Models\District;
use App\Models\Sector;
use App\Models\Station;
use Illuminate\Http\Request;

class StationCommunity extends Controller
{
        public function getDistricts(Request $request)
        {
            $districts=District::where('province_id',$request->province_id)->get();
            return response()->json($districts);
            
        }
    
        public function getSectors(Request $request){
            $sectors=Sector::where('district_id',$request->district_id)->get();
            return response()->json($sectors);
            dd($sectors);
        }
    
        public function getCells(Request $request){
            $cells=Cell::where('sector_id',$request->sector_id)->get();
            return response()->json($cells);
        }
  
    public function AllStations(){
        $stations = Station::get();
        // dd($stations);
        
     }
}




