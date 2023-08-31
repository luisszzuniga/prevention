<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLearnerRequest;
use App\Models\Learner;
use App\Models\Subclient;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\Response;

class LearnerController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/learners",
     *     summary="Ajoute un nouveau stagiaire",
     *     tags={"Learners"},
     *     @OA\RequestBody(
     *         required=true,
     *          description="Données pour ajouter un nouveau stagiaire",
     *          @OA\JsonContent(ref="#/components/schemas/StoreLearner")
     *      ),
     *     @OA\Response(
     *         response=201,
     *         description="Stagiaire ajouté avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="learner", ref="#/components/schemas/Learner")
     *         ),
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="errors", type="object")
     *         ),
     *     ),
     * )
     */
    public function store(StoreLearnerRequest $request): JsonResponse
    {
        try {
            Log::info('Entering store function');

            $user = new User();
            $user->lastname = $request->lastname;
            $user->firstname = $request->firstname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->zip_code = $request->zip_code;
            $user->town = $request->town;
            $user->password = bcrypt(Str::random(10));
            $user->save();

            Log::info('User saved', ['user_id' => $user->id]);

            $learner = new Learner();
            $learner->user()->associate($user);

            $subClient = Subclient::findOrFail($request->subclient_id);
            Log::info('Subclient found', ['subclient_id' => $subClient->id]);

            $learner->subclient()->associate($subClient);
            $learner->save();

            Log::info('Learner saved', ['learner_id' => $learner->id]);

            return response()->json([
                'message' => "Le stagiaire " . $learner->user->lastname . ' ' . $learner->user->firstname . " a été ajouté avec succès.",
                'learner' => $learner
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            // Log the exception message and file
            Log::error('Exception caught in store function', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            return response()->json([
                'error' => 'Une erreur est survenue lors de l\'ajout du stagiaire.',
                'details' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


}
