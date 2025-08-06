@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <a href="{{ route('candidates.show', $miss->id) }}" class="inline-flex items-center text-gray-600 hover:text-pink-600 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Retour
    </a>

    <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Finaliser votre vote</h1>
        <p class="text-lg text-gray-600">Confirmez votre choix et procédez au paiement</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 max-w-2xl mx-auto">
        <!-- Candidate Info Card -->
        <div class="flex items-center space-x-4 p-4 bg-pink-50 rounded-lg mb-6">
            <img src="{{ $miss->main_photo_url }}" alt="{{ $miss->full_name }}" class="w-16 h-16 rounded-full object-cover shadow-sm" />
            <div class="flex-grow">
                <h3 class="text-xl font-semibold text-gray-800">{{ $miss->full_name }}</h3>
                <p class="text-gray-600 text-sm">{{ $miss->city }}, {{ $miss->country }}</p>
            </div>
            <span class="inline-block bg-pink-200 text-pink-800 text-xs font-bold px-3 py-1 rounded-full">Vote</span>
        </div>

        <!-- Récapitulatif -->
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Récapitulatif</h2>
            <div class="space-y-2 text-gray-700">
                <div class="flex justify-between">
                    <span>Prix du vote</span>
                    <span>1.00 €</span>
                </div>
                <div class="flex justify-between">
                    <span>Frais de traitement</span>
                    <span>0.00 €</span>
                </div>
                <div class="flex justify-between font-bold text-lg border-t pt-2 mt-2">
                    <span>Total</span>
                    <span>1.00 €</span>
                </div>
            </div>
        </div>

        <!-- Moyen de paiement -->
        <form action="{{ route('vote.process', $miss->id) }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="1.00"> {{-- Hardcoded for now, can be dynamic --}}
            <input type="hidden" name="voter_email" value="test@example.com"> {{-- Placeholder, should be collected from user --}}
            <input type="hidden" name="voter_phone" value="1234567890"> {{-- Placeholder --}}

            <h2 class="text-xl font-bold text-gray-800 mb-4">Moyen de paiement</h2>
            <div class="space-y-4">
                <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 has-checked:border-pink-500 has-checked:ring-1 has-checked:ring-pink-500">
                    <input type="radio" name="payment_method" value="mobile_money" class="form-radio h-5 w-5 text-pink-600" checked>
                    <img src="/placeholder.svg?height=24&width=24" alt="Mobile Money" class="ml-3 h-6 w-6">
                    <div class="ml-3">
                        <span class="block text-gray-800 font-medium">Mobile Money</span>
                        <span class="block text-gray-500 text-sm">Orange Money, MTN Mobile Money</span>
                    </div>
                </label>
                <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 has-checked:border-pink-500 has-checked:ring-1 has-checked:ring-pink-500">
                    <input type="radio" name="payment_method" value="credit_card" class="form-radio h-5 w-5 text-pink-600">
                    <img src="/placeholder.svg?height=24&width=24" alt="Carte bancaire" class="ml-3 h-6 w-6">
                    <div class="ml-3">
                        <span class="block text-gray-800 font-medium">Carte bancaire</span>
                        <span class="block text-gray-500 text-sm">Visa, Mastercard</span>
                    </div>
                </label>
            </div>

            @error('payment_method')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
            @error('amount')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
            @error('voter_email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
            @error('payment')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

            <div class="mt-8">
                <x-buttons.primary-button type="submit" class="w-full">
                    Confirmer le vote - 1.00 €
                </x-buttons.primary-button>
            </div>

            <p class="text-center text-xs text-gray-500 mt-4">
                En votant, vous acceptez nos conditions d'utilisation.
            </p>
        </form>
    </div>
</div>
@endsection