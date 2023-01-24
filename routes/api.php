<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\TrainerController;
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

Route::middleware(['auth:sanctum','ability:user-get-user'])->group(function () {
    Route::post('/learners-store', [LearnerController::class, 'store'])->name('learners-store');
});

Route::post('/vehicles-store', [VehicleController::class, 'store'])->name('vehicles.store');

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('/trainers', [TrainerController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);

