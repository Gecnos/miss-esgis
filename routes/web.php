<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\MissAuthController; // For admin login
use App\Http\Controllers\MissdashController;
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

// Routes protégées pour les candidates
Route::middleware('auth:miss')->group(function () {
    Route::get('/dashboard', [CandidateController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile/edit', [CandidateController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [CandidateController::class, 'update'])->name('profile.update');
});
// Routes protégées pour les admins
Route::controller(AdminController::class)->group(function () {
    Route::get('/adminloginmaisjustedutextepourplusdesecurité', 'login')->name('connexion');
    Route::get('/dashboardAdmin','dashboard')->name('dashboard');
    Route::get('/approuve/{id}','approuve')->name('approuve');
    Route::get('/refuse/{id}','refuse')->name('refuse');
    Route::post('/adminloginmaisjustedutextepourplusdesecurité', 'checkLogin');
});
// Routes protégées pour les candidates
Route::controller(MissdashController::class)->group(function () {
    Route::get('/connexion', 'login')->name('MissConnexion');
    Route::post('/connexion', 'checkLogin');
    Route::get('/dashboardMiss', 'index')->name('dashboardMiss');
    Route::post('/addmedia', 'addmedia');
    Route::post('/updateinfo', 'updateinfo');
    Route::post('/modifiermedia', 'modifiermedia');
    
});