<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobRequestController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[JobRequestController::class,'create'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/apply-job', [JobRequestController::class, 'store']);


    Route::middleware('admin')->group(function () {

        Route::get('/manager/jobs', [JobController::class, 'index'])->name('jobs');
        Route::get('/manager/jobs/create', [JobController::class, 'create'])->name('jobs.create');
        Route::post('/manager/jobs/store', [JobController::class, 'store'])->name('jobs.store');
        Route::get('/manager/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
        Route::put('/manager/jobs/{job}/update', [JobController::class, 'update'])->name('jobs.update');

        Route::get('/manager/jobs-requests', [JobRequestController::class, 'index'])->name('jobsReqs');
        Route::get('/manager/jobs-requests/{id}/approve', [JobRequestController::class, 'approve']);
        Route::get('/manager/jobs-requests/{id}/reject', [JobRequestController::class, 'reject']);
    });


});

require __DIR__.'/auth.php';
