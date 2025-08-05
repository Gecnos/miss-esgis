@extends('layouts.app')

@section('title', $candidate->full_name . ' - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto">
    <!-- Back Button -->
    <div class="px-4 py-4">
        <a href="{{ route('home') }}" class="flex items-center text-gray-600 hover:text-gray-900">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Retour
        </a>
    </div>

    <!-- Hero Image -->
    <div class="relative">
        <div class="aspect-[4/3] bg-gray-200 overflow-hidden">
            <img src="{{ $candidate->photo_url }}" 
                 alt="{{ $candidate->full_name }}" 
                 class="w-full h-full object-cover">
        </div>
        
        <!-- Candidate Info Overlay -->
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
            <h1 class="text-2xl font-bold text-white mb-1">{{ $candidate->full_name }}</h1>
            <p class="text-white/90 mb-2">{{ $candidate->pays }} • {{ $candidate->age }} ans</p>
            <div class="flex items-center space-x-2">
                <span class="bg-miss-pink text-white text-sm px-3 py-1 rounded-full">
                    {{ $candidate->votes_count }} votes
                </span>
                <button class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="px-4 py-6">
        <!-- About Section -->
        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">À propos</h2>
            <p class="text-gray-600 leading-relaxed">
                {{ $candidate->bio ?: 'Étudiante en médecine à la Sorbonne, passionnée par la mode et l\'art contemporain. Je milite pour l\'accès aux soins dans les zones rurales et je pratique la danse classique depuis l\'âge de 5 ans.' }}
            </p>
        </div>

        <!-- Photo Gallery -->
        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Galerie photos</h2>
            <div class="grid grid-cols-4 gap-2">
                @for($i = 1; $i <= 4; $i++)
                <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=100&width=100" 
                         alt="Photo {{ $i }}" 
                         class="w-full h-full object-cover">
                </div>
                @endfor
            </div>
        </div>

        <!-- Video Section -->
        <div class="mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Vidéo de présentation</h2>
            <div class="aspect-video bg-gray-200 rounded-lg flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/80 rounded-full flex items-center justify-center mx-auto mb-2">
                        <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 text-sm">Lecteur vidéo (demo)</p>
                </div>
            </div>
        </div>

        <!-- Vote Section -->
        <div class="bg-gradient-to-r from-pink-50 to-orange-50 rounded-xl p-6 border border-pink-100">
            <div class="text-center">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Votez pour {{ $candidate->prenom }}</h3>
                <p class="text-gray-600 mb-4">Soutenez votre candidate favorite</p>
                
                <a href="{{ route('vote.show', $candidate->id) }}" 
                   class="inline-block px-8 py-3 gradient-bg text-white rounded-lg font-medium hover:opacity-90">
                    Voter pour elle maintenant
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
