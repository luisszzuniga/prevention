<?php

namespace App\Http\Controllers;

use App\Interfaces\CompanyInterface;
use App\Interfaces\TrainingInterface;
use App\Models\Company;
use Illuminate\Support\Facades\Log;

class TrainingController extends Controller
{
    private TrainingInterface $trainingRepository;

    public function __construct(TrainingInterface $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;
    }
    public function index()
    {
        $trainings = $this->trainingRepository->getTrainings();
        return response()->json([
            'trainings' => $trainings
        ], 201);
    }

}
