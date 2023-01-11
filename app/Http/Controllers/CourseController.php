<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        $vehicles = Vehicle::all();
        $learners = User::all();
        $trainers = User::all();

        return view('course.create-course',
            ['vehicles' => $vehicles, 'learners' => $learners, 'trainers' => $trainers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $buttonName = $request->input('submit');
        if ($buttonName === 'vehicle') {
            $request->validate([
                'name' => 'required|string|max:255',
                'brand' => 'required|string|max:255',
                'license_plate' => 'required|string|max:255',
                'type' => 'required|string|max:255',
            ]);
            $vehicle = new Vehicle();
            $vehicle->name = $request->name;
            $vehicle->brand = $request->brand;
            $vehicle->license_plate = $request->license_plate;
            $vehicle->type = $request->type;

            $vehicle->save();

            return back()->withInput()->with('success', 'Le véhicule a été créé avec succès.');
        } elseif ($buttonName === 'learner') {

            return back()->withInput()->with('success', 'L\'apprenant a été ajouté avec succès.');
        } elseif ($buttonName === 'trainer') {

            return back()->withInput()->with('success', 'Le formateur a été ajouté avec succès.');
        }

        return back()->withInput()->with('success', 'la session n\'a pas pu être crée.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
