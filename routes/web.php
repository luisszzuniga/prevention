<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'create'])->name('home');


Route::get('/offers', [OfferController::class, 'index'])->name('offers');




Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/course', [CourseController::class, 'create'])->name('course.create');

    Route::post('/course-store', [CourseController::class, 'store'])->name('course.store');

    Route::get('/vehicle', function () {
        return view('vehicle.create-vehicle');
    });

    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');

    Route::get('/learner', function () {
        return view('learner.add-learner');
    });





});

require __DIR__.'/auth.php';
