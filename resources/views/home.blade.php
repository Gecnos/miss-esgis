@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-text-gray-900 mb-4">Miss Élégance 2024</h1>
        <p class="text-lg text-text-gray-600 mb-6">Découvrez les candidates exceptionnelles et votez pour votre favorite</p>
        <div class="inline-block bg-accent-yellow text-text-yellow-900 font-bold py-3 px-6 rounded-full shadow-md text-lg">
            {{ number_format($totalVotes, 0, ',', ' ') }} votes au total
        </div>
    </div>

    @if($topMiss)
    <section class="mb-12">
        <h2 class="text-2xl font-bold text-text-gray-800 mb-6 flex items-center justify-center md:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-accent-yellow mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            Candidate en tête
        </h2>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-6 border-4 border-primary-pink">
            <img src="{{ $topMiss->main_photo_url }}" alt="{{ $topMiss->full_name }}" class="w-32 h-32 rounded-full object-cover shadow-md" />
            <div class="text-center md:text-left flex-grow">
                <h3 class="text-2xl font-semibold text-text-gray-800">{{ $topMiss->full_name }}</h3>
                <p class="text-text-gray-600">{{ $topMiss->city }}, {{ $topMiss->country }}</p>
                <p class="text-text-pink-600 font-bold text-lg mt-2">{{ $topMiss->total_votes }} votes</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <x-buttons.secondary-button class="flex-1" onclick="window.location='{{ route('candidates.show', $topMiss->id) }}'">
                    Voir profil
                </x-buttons.secondary-button>
                <x-buttons.primary-button class="flex-1" onclick="window.location='{{ route('vote.show', $topMiss->id) }}'">
                    Voter maintenant
                </x-buttons.primary-button>
            </div>
        </div>
    </section>
    @endif

    <section id="vote-section">
        <h2 class="text-2xl font-bold text-text-gray-800 mb-6">Toutes les candidates</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($activeMisses as $candidate)
                <x-cards.candidate-card :candidate="$candidate" />
            @endforeach
        </div>
    </section>
</div>
@endsection
