<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Page de confirmation du vote.
     */
    public function show(Miss $miss)
    {
        if ($miss->statut !== 'active') {
            abort(404);
        }

        return view('vote.show', compact('miss'));
    }

    /**
     * Traitement du vote et paiement.
     */
    public function process(Request $request, Miss $miss)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'numero_telephone' => 'nullable|string|max:20',
            'moyen_paiement' => 'required|string|max:50',
            'montant' => 'required|numeric|min:1.00',
        ]);

        // Simulation du paiement (à remplacer par API réelle)
        $paymentStatus = 'completed';
        $transactionId = 'TRX_' . uniqid();

        if ($paymentStatus !== 'completed') {
            return redirect()->back()->withErrors(['payment' => 'Le paiement a échoué.']);
        }

        // Enregistrement du vote
        Vote::create([
            'miss_id'         => $miss->id,
            'moyen_paiement'  => $request->moyen_paiement,
            'montant'         => $request->montant,
            'numero_telephone'=> $request->numero_telephone,
            'email'           => $request->email,
            'ip_adresse'      => $request->ip() ?? null,
        ]);

        return redirect()->route('vote.success', $miss->id)
            ->with('success', 'Votre vote a été enregistré avec succès !');
    }

    /**
     * Page de succès après vote.
     */
    public function success(Miss $miss)
    {
        return view('vote.success', compact('miss'));
    }
}
