@extends('layouts.app')

@section('title', 'Miss Élégance 2024 - Accueil')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <!-- Hero Section -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold gradient-text mb-4">Miss Élégance 2024</h1>
        <p class="text-gray-600 mb-6">Découvrez les candidates exceptionnelles et votez pour votre favorite</p>
        
        <div class="inline-block bg-yellow-400 text-yellow-900 px-4 py-2 rounded-full font-medium">
            {{ $totalVotes }} votes au total
        </div>
    </div>

    <!-- Top Candidate -->
    @if($topCandidate)
    <div class="bg-gradient-to-r from-pink-50 to-orange-50 rounded-xl p-6 mb-8 border border-pink-100">
        <div class="flex items-center mb-4">
            <span class="text-2xl mr-2">👑</span>
            <h2 class="text-lg font-semibold text-gray-900">Candidate en tête</h2>
        </div>
        
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ $topCandidate->photo_url }}" 
                     alt="{{ $topCandidate->full_name }}" 
                     class="w-16 h-16 rounded-full object-cover">
                <div>
                    <h3 class="font-semibold text-gray-900">{{ $topCandidate->full_name }}</h3>
                    <p class="text-sm text-gray-500">{{ $topCandidate->pays }}</p>
                    <p class="text-sm font-medium text-miss-pink">{{ $topCandidate->votes_count }} votes</p>
                </div>
            </div>
            
            <div class="flex space-x-2">
                <a href="{{ route('candidate.show', $topCandidate->id) }}" 
                   class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">
                    Voir profil
                </a>
                <a href="{{ route('vote.show', $topCandidate->id) }}" 
                   class="px-4 py-2 gradient-bg text-white rounded-lg text-sm hover:opacity-90">
                    Voter maintenant
                </a>
            </div>
        </div>
    </div>
    @endif

    <!-- All Candidates -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Toutes les candidates</h2>
        
        <div class="grid grid-cols-1 gap-4">
            @foreach($candidates as $candidate)
                @include('components.cards.candidate', [
                    'candidate' => $candidate,
                    'isTopCandidate' => $loop->first
                ])
            @endforeach
        </div>
    </div>
</div>
@endsection
