<?php

namespace App\Http\Controllers;

use App\Interfaces\CenterInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CenterController extends Controller
{
    private CenterInterface $centerRepository;

    public function __construct(CenterInterface $centerRepository)
    {
        $this->centerRepository = $centerRepository;
    }
    public function getCentersForCurrentUser(): JsonResponse
    {
        $user = Auth::user();
        $clientId = $user->client_id;
        $centers = $this->centerRepository->getCentersByClientId($clientId);

        return response()->json([
            'centers' => $centers
        ]);
    }

}
