<?php

namespace App\Http\Controllers;

use App\Interfaces\CenterInterface;
use Illuminate\Http\JsonResponse;

class CenterController extends Controller
{
    private CenterInterface $centerRepository;

    public function __construct(CenterInterface $centerRepository)
    {
        $this->centerRepository = $centerRepository;
    }
    public function index(): JsonResponse
    {
        $centers = $this->centerRepository->getCenters();
        return response()->json([
            'centers' => $centers
        ], 201);
    }

}
