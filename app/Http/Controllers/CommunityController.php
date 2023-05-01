<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Province;
use App\Models\Vilage;
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
        $villages = Vilage::all();
        return view('community.index',compact('community','stations','districts','sectors','cells','villages'))
          ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $station=Station::all();
        $community=Community::all();
        $province=Province::all();
        $district = District::all();
        $sector = Sector::all();
        $cell = Cell::all();
        $village = Vilage::all();
       
        return view('community.create', compact('station','province','district','sector','cell','village','community'));
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
            'province_id'=>'required',
            'district_id'=>'required',
            'sector_id'=>'required',
            'cell_id'=>'required',
            'village_id'=>'required',
            'station_id'=>'required',   
        ]);
    
         Community::create($request->all());
        
        return redirect()->route('community.index')
                        ->with('dark','same one created successfully');
    }
    public function show($id)
    {
        $community=Community::find($id);
        $station = $community->station;
        $province=$community->province;
        $district = $community->district;
        $sector = $community->sector;
        $cell = $community->cell;
        $village = $community->vilage;
       
        
           return view('community.show', compact('community','station','province', 'district', 'sector', 'cell',));
    }
    public function edit($id)
    {

        $community = Community::find($id);
        $provinces= Province::all();
        $districts = District::all();
        $sectors = Sector::all();
        $cells = Cell::all();
        $villages = Vilage::all();
        $station = Station::all();
      
        return view('community.edit', compact('community','station','provinces', 'districts', 'sectors', 'cells', 'villages', ));
    }
  
    public function update(Request $request, Community $community)
    {
         request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'birth_date' =>'before:today',
            'email'=> 'required',
            'profession',
            'phone'=>'required',
            'province_id'=>'required',
            'district_id'=>'required',
            'sector_id'=>'required',
            'cell_id'=>'required',
            'village_id'=>'required',
            'station_id'=>'required', 
        ]);
    
        $community->update($request->all());
    
        return redirect()->route('community.index')
                        ->with('info','Farmer updated successfully');
    }
}
