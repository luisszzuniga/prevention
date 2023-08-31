<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SubClientController extends Controller
{
    public function getSubClientsForCurrentUser(): JsonResponse
    {
        Log::info('fonction');
        $user = Auth::user();
        Log::info($user);
        $client = $user->client;
        Log::info($client);

        $subClients = $client->subclients->comapny;

        return response()->json($subClients);
    }
}
