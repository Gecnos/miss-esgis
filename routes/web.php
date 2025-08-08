<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\MissAuthController;
use App\Http\Controllers\MissdashController;

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