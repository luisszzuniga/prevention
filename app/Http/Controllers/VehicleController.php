<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Show the form for creating a new vehicle.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created vehicle in storage.
     *
     * @param  \App\Http\Requests\VehicleRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(VehicleRequest $request)
    {
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->brand = $request->brand;
        $vehicle->license_plate = $request->license_plate;
        $vehicle->type = $request->type;
        $vehicle->save();

        return response()->json([
            'message' => "Le véhicule " . $vehicle->name . " a été créé avec succès.",
            'vehicle' => $vehicle
        ], 201);
    }
}
