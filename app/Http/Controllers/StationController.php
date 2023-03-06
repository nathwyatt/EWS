<?php
    
namespace App\Http\Controllers;
    
use App\Models\Station;
use Illuminate\Http\Request;
    
class StationController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:station-list|station-create|station-edit|station-delete', ['only' => ['index','show']]);
         $this->middleware('permission:station-create', ['only' => ['create','store']]);
         $this->middleware('permission:station-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:station-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::latest()->paginate(5);
        return view('stations.index',compact('stations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stations.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'district' => 'required',
        ]);
    
        Station::create($request->all());
    
        return redirect()->route('stations.index')
                        ->with('success','station created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        return view('Stations.show',compact('station'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Station $station)
    {
        return view('stations.edit',compact('station'));
    }
    
    /**
     * Update the specified resource in storage.
     *
   
     */
    public function update(Request $request, Station $station)
    {
         request()->validate([
            'name' => 'required',
            'district' => 'required',
        ]);
    
        $station->update($request->all());
    
        return redirect()->route('stations.index')
                        ->with('success','station updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy(Station $station)
    {
        $station->delete();
    
        return redirect()->route('stations.index')
                        ->with('success','station deleted successfully');
    }
}