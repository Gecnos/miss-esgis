@extends('layouts.app')

@section('title', 'Toutes les candidates - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold gradient-text mb-4">Miss Élégance 2024</h1>
        <p class="text-gray-600 mb-6">Découvrez les candidates exceptionnelles et votez pour votre favorite</p>
        
        <div class="inline-block bg-yellow-400 text-yellow-900 px-4 py-2 rounded-full font-medium">
            {{ $candidates->sum('votes_count') }} votes au total
        </div>
    </div>

    <!-- Top Candidate -->
    @if($candidates->isNotEmpty())
    <div class="bg-gradient-to-r from-pink-50 to-orange-50 rounded-xl p-6 mb-8 border border-pink-100">
        <div class="flex items-center mb-4">
            <span class="text-2xl mr-2">👑</span>
            <h2 class="text-lg font-semibold text-gray-900">Candidate en tête</h2>
        </div>
        
        @php $topCandidate = $candidates->first(); @endphp
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

    <!-- All Candidates Grid -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Toutes les candidates</h2>
        
        @if($candidates->isNotEmpty())
            <div class="grid grid-cols-1 gap-4">
                @foreach($candidates as $candidate)
                    @include('components.cards.candidate', [
                        'candidate' => $candidate,
                        'isTopCandidate' => $loop->first
                    ])
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Aucune candidate pour le moment</h3>
                <p class="text-gray-500 mb-4">Les inscriptions sont ouvertes !</p>
                <a href="{{ route('register') }}" 
                   class="inline-block px-6 py-3 gradient-bg text-white rounded-lg font-medium hover:opacity-90">
                    Devenir candidate
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
