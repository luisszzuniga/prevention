<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\JsonResponse;

class CreateTrainingController extends Controller
{
    public function getCentersAndGrids($trainerId): JsonResponse
    {

        $trainer = Trainer::with('user.client.centers', 'user.client.grids')->find($trainerId);
        $centers = $trainer->user->client->centers;
        $grids = $trainer->user->client->grids;

        return response()->json([
            'centers' => $centers,
            'grids' => $grids
        ]);
    }
}
