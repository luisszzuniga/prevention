<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTrainingRequest;
use App\Interfaces\TrainingInterface;
use App\Models\Offer;
use App\Models\Trainer;
use App\Models\Training;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * Create a new training.
     *
     * @param CreateTrainingRequest $request
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function create(CreateTrainingRequest $request): JsonResponse
    {
        $offer = Offer::where('name', 'Plus')->first();
        $trainer = Trainer::where('user_id', Auth::id())->first();
//        $formattedDate = Carbon::parse($request['training_date'])->format('Y-m-d H:i:s');
        $training = new Training;
        $training->name = $request['training_name'];
        $training->center_id = $request['center_id'];
        $training->date = $request['training_date'];
        $training->offer_id = $offer->id;
        $training->trainer_id = $trainer->id;
        $training->save();

        return response()->json([
            'message' => "La Formation " . $training->name . " a été crée avec succès.",
        ], Response::HTTP_CREATED);
    }

}
