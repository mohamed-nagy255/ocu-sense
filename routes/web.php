<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/show/patient/{id}', [HomeController::class, 'show'])->name('show.pat');
    Route::get('/show/patient', [HomeController::class, 'pat'])->name('pats');
    Route::post('/patient/insert', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
