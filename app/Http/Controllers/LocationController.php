<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Village;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return view('locations.index');
    }

    public function create()
    {
        $districts = Districts::pluck('name', 'id');

        return view('locations.create', compact('districts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'district_id' => 'required',
            'sector_id' => 'required',
            'cell_id' => 'required',
            'village_id' => 'required',
        ]);

        $location = Location::create($validatedData);

        return redirect()->back()->with('success', 'Location selected successfully!');
    }

    public function getSectors(Request $request)
    {
        $sectors = Sector::where('district_id', $request->district_id)
                         ->pluck('name', 'id');

        return response()->json($sectors);
    }

    public function getCells(Request $request)
    {
        $cells = Cell::where('sector_id', $request->sector_id)
                     ->pluck('name', 'id');

        return response()->json($cells);
    }

    public function getVillages(Request $request)
    {
        $villages = Village::where('cell_id', $request->cell_id)
                           ->pluck('name', 'id');

        return response()->json($villages);
    }
}