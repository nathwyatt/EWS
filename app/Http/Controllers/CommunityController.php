<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Station;

class CommunityController extends Controller
{
    
    
    public function index(Request $request)
    {
        $station = Station::latest()->get(); 
        $data =DB::table('community')->paginate(5);
        return view('community.index',compact('data','station'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

            $station = Community::join('stations', 'station.id', '=', 'community.station_id') 
            ->get();
    }
    public function create()
    {
        $station = Station::latest()->get();
        return view('community.create', compact('station'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'station_id'=>'required', 
            'fname'=>'required',
            'lname'=>'required',
            'email'=> 'required|email|unique:community,email',
            'phone'=>'required'   
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $data = Community::create($input);
        
    
        return redirect()->route('community.index')
                        ->with('success','same one created successfully');
    }
}
