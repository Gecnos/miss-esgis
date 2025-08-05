@extends('layouts.app')

@section('title', 'Vote confirmé - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <div class="text-center mb-8">
        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Vote confirmé !</h1>
        <p class="text-gray-600 mb-6">Merci d'avoir voté pour {{ $candidate->full_name }}</p>
    </div>

    <!-- Candidate Info -->
    <div class="bg-gradient-to-r from-pink-50 to-orange-50 rounded-xl p-6 mb-6 border border-pink-100">
        <div class="flex items-center space-x-4">
            <img src="{{ $candidate->photo_url }}" 
                 alt="{{ $candidate->full_name }}" 
                 class="w-16 h-16 rounded-full object-cover">
            <div>
                <h3 class="font-semibold text-gray-900">{{ $candidate->full_name }}</h3>
                <p class="text-sm text-gray-500">{{ $candidate->pays }}</p>
                <p class="text-sm font-medium text-miss-pink">+1 vote ajouté</p>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Votre vote a été enregistré</h2>
        <div class="space-y-3 text-sm text-gray-600">
            <div class="flex justify-between">
                <span>Candidate :</span>
                <span class="font-medium">{{ $candidate->full_name }}</span>
            </div>
            <div class="flex justify-between">
                <span>Montant :</span>
                <span class="font-medium">1.00 €</span>
            </div>
            <div class="flex justify-between">
                <span>Date :</span>
                <span class="font-medium">{{ now()->format('d/m/Y à H:i') }}</span>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="space-y-3">
        <a href="{{ route('candidate.show', $candidate->id) }}" 
           class="block w-full py-3 px-4 gradient-bg text-white rounded-lg font-medium text-center hover:opacity-90">
            Voir le profil de {{ $candidate->prenom }}
        </a>
        
        <a href="{{ route('home') }}" 
           class="block w-full py-3 px-4 border border-gray-300 text-gray-700 rounded-lg font-medium text-center hover:bg-gray-50">
            Retour à l'accueil
        </a>
        
        <a href="{{ route('candidates.index') }}" 
           class="block w-full py-3 px-4 text-miss-pink rounded-lg font-medium text-center hover:bg-pink-50">
            Découvrir d'autres candidates
        </a>
    </div>

    <!-- Share Section -->
    <div class="mt-8 text-center">
        <p class="text-gray-500 text-sm mb-4">Partagez votre soutien :</p>
        <div class="flex justify-center space-x-4">
            <button class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
            </button>
            <button class="w-10 h-10 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </button>
            <button class="w-10 h-10 bg-pink-600 text-white rounded-full flex items-center justify-center hover:bg-pink-700">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                </svg>
            </button>
        </div>
    </div>
</div>
@endsection
