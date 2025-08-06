@extends('layouts.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-extrabold text-text-gray-900 mb-4">Devenir candidate</h1>
        <p class="text-lg text-text-gray-600">Rejoignez le concours Miss Élégance 2024</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-text-gray-800 mb-6">Formulaire d'inscription</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('candidates.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <label for="first_name" class="block text-sm font-medium text-text-gray-700">Prénom *</label>
                <x-inputs.text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" placeholder="Votre prénom" required autofocus value="{{ old('first_name') }}" />
                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-text-gray-700">Nom *</label>
                <x-inputs.text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" placeholder="Votre nom" required value="{{ old('last_name') }}" />
                @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="age" class="block text-sm font-medium text-text-gray-700">Âge *</label>
                <x-inputs.text-input id="age" name="age" type="number" class="mt-1 block w-full" placeholder="Votre âge" required value="{{ old('age') }}" />
                @error('age')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="city" class="block text-sm font-medium text-text-gray-700">Ville *</label>
                <x-inputs.text-input id="city" name="city" type="text" class="mt-1 block w-full" placeholder="Votre ville" required value="{{ old('city') }}" />
                @error('city')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="country" class="block text-sm font-medium text-text-gray-700">Pays *</label>
                <x-inputs.text-input id="country" name="country" type="text" class="mt-1 block w-full" placeholder="Votre pays" required value="{{ old('country') }}" />
                @error('country')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-text-gray-700">Téléphone</label>
                <x-inputs.text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" placeholder="+33 6 12 34 56 78" value="{{ old('phone') }}" />
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="email" class="block text-sm font-medium text-text-gray-700">Email *</label>
                <x-inputs.text-input id="email" name="email" type="email" class="mt-1 block w-full" placeholder="votre@email.com" required value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="main_photo" class="block text-sm font-medium text-text-gray-700">Photo principale *</label>
                <div class="mt-1 flex items-center space-x-2">
                    <label class="cursor-pointer bg-primary-pink hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-md shadow-sm transition duration-150 ease-in-out">
                        Choisir un fichier
                        <input id="main_photo" name="main_photo" type="file" class="hidden" accept="image/jpeg,image/png,image/jpg" onchange="document.getElementById('file-name').innerText = this.files[0] ? this.files[0].name : 'Aucun fichier choisi'" required />
                    </label>
                    <span id="file-name" class="text-text-gray-500">Aucun fichier choisi</span>
                </div>
                <p class="text-xs text-text-gray-500 mt-1">Format accepté : JPG, PNG (max 5MB)</p>
                @error('main_photo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label for="short_presentation" class="block text-sm font-medium text-text-gray-700">Présentation courte</label>
                <textarea id="short_presentation" name="short_presentation" rows="4" class="mt-1 block w-full border-gray-300 focus:border-primary-pink focus:ring-primary-pink rounded-md shadow-sm" placeholder="Parlez-nous de vous, vos passions, vos projets..." maxlength="500">{{ old('short_presentation') }}</textarea>
                <p class="text-xs text-text-gray-500 mt-1 text-right"><span id="char-count">0</span>/500 caractères</p>
                @error('short_presentation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2 mt-4">
                <x-buttons.primary-button class="w-full">
                    Envoyer ma candidature
                </x-buttons.primary-button>
            </div>

            <div class="md:col-span-2 text-center text-xs text-text-gray-500 mt-4">
                En soumettant ce formulaire, vous acceptez nos conditions d'utilisation et notre politique de confidentialité.
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const shortPresentation = document.getElementById('short_presentation');
        const charCount = document.getElementById('char-count');

        if (shortPresentation && charCount) {
            shortPresentation.addEventListener('input', function() {
                charCount.innerText = this.value.length;
            });
            // Initialize count on load if there's old input
            charCount.innerText = shortPresentation.value.length;
        }
    });
</script>
@endsection
