<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Miss::active()
            ->withCount('votes')
            ->orderBy('votes_count', 'desc')
            ->get();

        return view('candidates.index', compact('candidates'));
    }

    public function show($id)
    {
        $candidate = Miss::active()
            ->with(['medias', 'votes'])
            ->withCount('votes')
            ->findOrFail($id);

        return view('candidates.show', compact('candidate'));
    }

    public function dashboard()
    {
        $candidate = auth('miss')->user();
        $candidate->load(['votes', 'medias']);
        $candidate->loadCount('votes');

        return view('candidates.dashboard', compact('candidate'));
    }

    public function edit()
    {
        $candidate = auth('miss')->user();
        return view('candidates.edit', compact('candidate'));
    }

    public function update(Request $request)
    {
        $candidate = auth('miss')->user();

        $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'age' => 'required|integer|min:18|max:30',
            'pays' => 'required|string|max:100',
            'telephone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500',
            'photo_principale' => 'nullable|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $data = $request->only(['nom', 'prenom', 'age', 'pays', 'telephone', 'bio']);

        if ($request->hasFile('photo_principale')) {
            if ($candidate->photo_principale) {
                Storage::disk('public')->delete($candidate->photo_principale);
            }
            $data['photo_principale'] = $request->file('photo_principale')->store('candidates', 'public');
        }

        $candidate->update($data);

        return redirect()->route('dashboard')->with('success', 'Profil mis à jour avec succès');
    }
}
