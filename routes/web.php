<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\MissAuthController; // For admin login
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates.index');
Route::get('/candidates/{miss}', [CandidateController::class, 'show'])->name('candidates.show');

// Candidate Registration
Route::get('/register-candidate', [CandidateController::class, 'create'])->name('candidates.create');
Route::post('/register-candidate', [CandidateController::class, 'store'])->name('candidates.store');

// Voting System
Route::get('/vote/{miss}', [VoteController::class, 'show'])->name('vote.show');
Route::post('/vote/{miss}/process', [VoteController::class, 'process'])->name('vote.process');
Route::get('/vote/{miss}/success', [VoteController::class, 'success'])->name('vote.success');
    