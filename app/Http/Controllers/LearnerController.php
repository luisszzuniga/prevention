<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LearnerController extends Controller
{

    public function store(Request $request)
    {
        $learner = new User();
        $learner->lastname = $request->lastname;
        $learner->firstname = $request->firstname;
        $learner->email = $request->email;
        $learner->phone = $request->phone;
        $learner->address = $request->address;
        $learner->zip_code = $request->zip_code;
        $learner->town = $request->town;
        $learner->password = bcrypt($this->generatePassword());
        $learner->trainer_id = 2;
        $learner->save();

       Log::info(Auth::user()->id);

        return response()->json([
            'message' => "Le stagiaire " . $learner->lastname . ' ' . $learner->firstname . " a été ajouté avec succès.",
            'learner' => $learner
        ], 201);
    }

    private function generatePassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 12; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
