<?php

namespace App\Http\Controllers;

use App\Models\Miss;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Show the vote confirmation page for a specific miss.
     */
    public function show(Miss $miss)
    {
        // Ensure only active candidates can be voted for
        if ($miss->status !== 'active') {
            abort(404);
        }
        return view('vote.show', compact('miss'));
    }

    /**
     * Process the vote and payment.
     */
    public function process(Request $request, Miss $miss)
    {
        $request->validate([
            'voter_email' => 'required|email|max:255',
            'voter_phone' => 'nullable|string|max:20',
            'payment_method' => 'required|in:mobile_money,credit_card',
            'amount' => 'required|numeric|min:1.00', // Assuming a minimum vote amount
        ]);

        // --- Payment Gateway Integration Placeholder ---
        // In a real application, you would integrate with a payment gateway here (e.g., Stripe, PayPal, local mobile money APIs).
        // This would involve:
        // 1. Sending payment details to the gateway.
        // 2. Handling the gateway's response (success, failure, pending).
        // 3. Storing the transaction ID.
        // 4. Updating the vote status based on payment outcome.

        $transactionId = 'TRX_' . uniqid(); // Placeholder transaction ID
        $paymentStatus = 'completed'; // Assume success for demo purposes

        // If payment fails:
        // $paymentStatus = 'failed';
        // return redirect()->back()->withErrors(['payment' => 'Le paiement a échoué. Veuillez réessayer.']);

        $vote = Vote::create([
            'miss_id' => $miss->id,
            'voter_email' => $request->voter_email,
            'voter_phone' => $request->voter_phone,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'transaction_id' => $transactionId,
            'status' => $paymentStatus,
        ]);

        if ($paymentStatus === 'completed') {
            // Increment total votes for the miss
            $miss->increment('total_votes');
            return redirect()->route('vote.success', $miss->id)->with('success', 'Votre vote a été enregistré avec succès !');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors du traitement de votre vote. Veuillez réessayer.');
        }
    }

    /**
     * Display the vote success page.
     */
    public function success(Miss $miss)
    {
        return view('vote.success', compact('miss'));
    }
}