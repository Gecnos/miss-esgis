<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use App\Models\Vote;

class HomeController extends Controller
{
    public function index()
    {
        $candidates = Miss::active()
            ->withCount('votes')
            ->orderBy('votes_count', 'desc')
            ->get();

        $topCandidate = $candidates->first();
        $totalVotes = Vote::count();

        return view('home', compact('candidates', 'topCandidate', 'totalVotes'));
    }
}
