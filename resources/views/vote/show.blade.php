@extends('layouts.app')

@section('title', 'Finaliser votre vote - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('candidate.show', $candidate->id) }}" class="flex items-center text-gray-600 hover:text-gray-900">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Retour
        </a>
    </div>

    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Finaliser votre vote</h1>
        <p class="text-gray-600">Confirmez votre choix et procédez au paiement</p>
    </div>

    <!-- Selected Candidate -->
    <div class="bg-gradient-to-r from-pink-50 to-orange-50 rounded-xl p-4 mb-6 border border-pink-100">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="{{ $candidate->photo_url }}" 
                     alt="{{ $candidate->full_name }}" 
                     class="w-12 h-12 rounded-full object-cover">
                <div>
                    <h3 class="font-semibold text-gray-900">{{ $candidate->full_name }}</h3>
                    <p class="text-sm text-gray-500">{{ $candidate->pays }}</p>
                </div>
            </div>
            <span class="bg-miss-pink text-white text-sm px-3 py-1 rounded-full">Vote</span>
        </div>
    </div>

    <form action="{{ route('vote.process', $candidate->id) }}" method="POST">
        @csrf
        
        <!-- Price Summary -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Récapitulatif</h2>
            
            <div class="space-y-3">
                <div class="flex justify-between">
                    <span class="text-gray-600">Prix du vote</span>
                    <span class="font-medium">1.00 €</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Frais de traitement</span>
                    <span class="font-medium">0.00 €</span>
                </div>
                <hr>
                <div class="flex justify-between text-lg font-semibold">
                    <span>Total</span>
                    <span class="text-miss-pink">1.00 €</span>
                </div>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Moyen de paiement</h2>
            
            <div class="space-y-3">
                <label class="flex items-center p-4 border-2 border-miss-pink rounded-lg bg-pink-50">
                    <input type="radio" name="moyen_paiement" value="mobile_money" class="text-miss-pink" checked>
                    <div class="ml-3 flex items-center">
                        <div class="w-8 h-8 bg-gray-800 rounded mr-3 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Mobile Money</p>
                            <p class="text-sm text-gray-500">Orange Money, MTN Mobile Money</p>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-miss-pink ml-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                </label>
                
                <label class="flex items-center p-4 border-2 border-gray-200 rounded-lg hover:border-gray-300">
                    <input type="radio" name="moyen_paiement" value="carte_bancaire" class="text-miss-pink">
                    <div class="ml-3 flex items-center">
                        <div class="w-8 h-8 bg-yellow-500 rounded mr-3 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Carte bancaire</p>
                            <p class="text-sm text-gray-500">Visa, Mastercard</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>

        @include('components.buttons.primary', [
            'type' => 'submit'
        ])
            Confirmer le vote - 1.00 €
        @endcomponent
        
        <p class="text-xs text-gray-500 text-center mt-4">
            En votant, vous acceptez nos conditions d'utilisation
        </p>
    </form>
</div>
@endsection
