<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Village;
use App\Models\Station;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    
    
    public function index(Request $request)
    {
        // dd($request->station_id);

        $id = Auth::user()->station->id;
        $community = Community::where('station_id', $id)->get();

        $stationId = $request->input('station_id');
        $stations = Station::latest()->paginate(5);
        // dd($stations);
        $districts = District::all();
        $sectors = Sector::all();
        $cells = Cell::all();
        $villages = Village::all();
        return view('community.index',compact('community','stations','districts','sectors','cells','villages'))
          ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $station=Station::all();
        $community=Community::all();
        $district = District::all();
        $sector = Sector::all();
        $cell = Cell::all();
        $village = Village::all();
       
        return view('community.create', compact('station','district','sector','cell','village','community'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [ 
            'fname'=>'required',
            'lname'=>'required',
            'birth_date' =>'before:today',
            'email'=> 'required|email|unique:communities,email',
            'profession',
            'phone'=>'required',
            'district_id'=>'required',
            'sector_id'=>'required',
            'cell_id'=>'required',
            'village_id'=>'required',
            'station_id'=>'required',   
        ]);
    
         Community::create($request->all());
        
        return redirect()->route('community.index')
                        ->with('success','same one created successfully');
    }
    public function show($id)
    {
        $community=Community::find($id);
        $station = $community->station;
        $district = $community->district;
        $sector = $community->sector;
        $cell = $community->cell;
        $village = $community->village;
       

        return view('community.show', compact('community','station', 'district', 'sector', 'cell', 'village'));
    }
}
