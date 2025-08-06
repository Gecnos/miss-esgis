<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with candidates.
     */
    public function index()
    {
        $totalVotes = Miss::sum('total_votes');
        $topMiss = Miss::where('status', 'active')->orderByDesc('total_votes')->first();
        $activeMisses = Miss::where('status', 'active')->orderByDesc('total_votes')->get();

        return view('home', compact('totalVotes', 'topMiss', 'activeMisses'));
    }
}