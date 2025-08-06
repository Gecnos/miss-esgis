@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 text-center mb-12">Toutes les Candidates</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($candidates as $candidate)
            <x-cards.candidate-card :candidate="$candidate" />
        @empty
            <p class="col-span-full text-center text-gray-600 text-lg">Aucune candidate active pour le moment.</p>
        @endforelse
    </div>
</div>
@endsection