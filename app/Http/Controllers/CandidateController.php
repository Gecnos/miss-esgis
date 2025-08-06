<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of all active candidates.
     */
    public function index()
    {
        $candidates = Miss::where('status', 'active')->orderBy('first_name')->get();
        return view('candidates.index', compact('candidates'));
    }

    /**
     * Display the specified candidate.
     */
    public function show(Miss $miss)
    {
        // Ensure only active candidates can be viewed publicly
        if ($miss->status !== 'active') {
            abort(404);
        }
        $photos = $miss->medias()->where('type', 'photo')->get();
        $video = $miss->medias()->where('type', 'video')->first();

        return view('candidates.show', compact('miss', 'photos', 'video'));
    }

    /**
     * Show the form for creating a new candidate.
     */
    public function create()
    {
        return view('auth.register-candidate');
    }

    /**
     * Store a newly created candidate in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:99',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:misses',
            'main_photo' => 'required|image|max:5120', // Max 5MB
            'short_presentation' => 'nullable|string|max:500',
        ]);

        $mainPhotoPath = $request->file('main_photo')->store('miss_photos', 'public');

        Miss::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'main_photo_url' => Storage::url($mainPhotoPath),
            'short_presentation' => $request->short_presentation,
            'status' => 'pending', // New candidates are pending by default
        ]);

        return redirect()->route('home')->with('success', 'Votre candidature a été soumise avec succès et est en attente de validation.');
    }
}