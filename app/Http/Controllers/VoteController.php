<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function show(Miss $candidate)
    {
        return view('vote.show', compact('candidate'));
    }

    public function process(Request $request, Miss $candidate)
    {
        $request->validate([
            'moyen_paiement' => 'required|in:mobile_money,carte_bancaire',
            'email' => 'nullable|email',
            'numero_telephone' => 'nullable|string'
        ]);

        Vote::create([
            'miss_id' => $candidate->id,
            'moyen_paiement' => $request->moyen_paiement,
            'montant' => 1.00,
            'numero_telephone' => $request->numero_telephone,
            'email' => $request->email,
            'ip_adresse' => $request->ip()
        ]);

        return redirect()->route('vote.success', $candidate);
    }

    public function success(Miss $candidate)
    {
        return view('vote.success', compact('candidate'));
    }
}
