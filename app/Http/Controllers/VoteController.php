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
            'number_of_votes' => 'required|integer|min:1'
        ]);

        $nombreVotes = $request->input('number_of_votes');
        $montant = $nombreVotes * 100; // FCFA

        // Simuler un paiement avec Kkiapay (à remplacer)
        $paymentStatus = 'completed'; // À remplacer plus tard par une vérif avec callback Kkiapay
        $transactionId = 'TRX_' . uniqid();

        if ($paymentStatus !== 'completed') {
            return redirect()->back()->withErrors(['payment' => 'Le paiement a échoué.']);
        }

        // Enregistrer autant de votes que demandé
        for ($i = 0; $i < $nombreVotes; $i++) {
            Vote::create([
                'miss_id'          => $miss->id,
                'moyen_paiement'   => $request->moyen_paiement,
                'montant'          => 100, // par vote
                'numero_telephone' => $request->numero_telephone,
                'email'            => $request->email,
                'ip_adresse'       => $request->ip() ?? null,
                // éventuellement ajouter le $transactionId si tu veux tracer
            ]);
        }
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
