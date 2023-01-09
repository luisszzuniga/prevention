<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function create()
    {
        return view('vehicles.create');
    }

    public function store(VehicleRequest $request)
    {

        $vehicle = new Vehicle;
        $vehicle->name = $request->name;
        $vehicle->brand = $request->brand;
        $vehicle->license_plate = $request->license_plate;
        $vehicle->type = $request->type;

        $vehicle->save();

        return redirect()->route('dashboard')->with('success', 'Le véhicule a été créé avec succès.');




//        return back()->withInput()->with('success', 'Le véhicule a été créé avec succès.');
    }
}
