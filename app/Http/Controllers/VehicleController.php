<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
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
        $vehicle->learner_id =
        $vehicle->save();

        return response()->json([
            'message' => "Le véhicule " . $vehicle->name . " a été créé avec succès.",
            'vehicle' => $vehicle
        ], 201);
    }
}
