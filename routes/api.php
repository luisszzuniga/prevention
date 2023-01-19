<?php

use App\Http\Controllers\LearnerController;
use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
Route::post('/vehicles-store', [VehicleController::class, 'store'])->name('vehicles.store');

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/learners-store', [LearnerController::class, 'store'])->name('learners-store');

});

