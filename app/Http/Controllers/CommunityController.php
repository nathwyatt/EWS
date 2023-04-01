<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    
    public function index(Request $request)
    {
        $data = Community::orderBy('id','DESC')->paginate(5);
        return view('community.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

        
    }
    public function create()
    {
        return view('community.create');
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
