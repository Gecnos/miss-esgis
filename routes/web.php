<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\MissAuthController;

// Routes publiques
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates.index');
Route::get('/candidate/{id}', [CandidateController::class, 'show'])->name('candidate.show');

// Routes d'authentification des candidates
Route::get('/login', [MissAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MissAuthController::class, 'login']);
Route::get('/register', [MissAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [MissAuthController::class, 'register']);
Route::post('/logout', [MissAuthController::class, 'logout'])->name('logout');

// Routes de vote
Route::get('/vote/{candidate}', [VoteController::class, 'show'])->name('vote.show');
Route::post('/vote/{candidate}', [VoteController::class, 'process'])->name('vote.process');
Route::get('/vote/success/{candidate}', [VoteController::class, 'success'])->name('vote.success');

// Routes protégées pour les candidates
Route::middleware('auth:miss')->group(function () {
    Route::get('/dashboard', [CandidateController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile/edit', [CandidateController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [CandidateController::class, 'update'])->name('profile.update');
});
