<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use App\Models\Vote;

class HomeController extends Controller
{
    public function index()
    {
        // Total des votes = nombre total d'entrées dans la table votes
        $totalVotes = Vote::count();

        // Top Miss par nombre de votes
        $topMiss = Miss::withCount('votes')
            ->where('statut', 'active')
            ->orderByDesc('votes_count')
            ->first();

        // Toutes les candidates actives triées par nombre de votes
        $activeMisses = Miss::withCount('votes')
            ->where('statut', 'active') 
            ->orderByDesc('votes_count')
            ->get();

        return view('home', compact('totalVotes', 'topMiss', 'activeMisses'));
    }
}
