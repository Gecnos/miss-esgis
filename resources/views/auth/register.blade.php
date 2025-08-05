@extends('layouts.app')

@section('title', 'Devenir candidate - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold gradient-text mb-4">Devenir candidate</h1>
        <p class="text-gray-600">Rejoignez le concours Miss Élégance 2024</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-6">Formulaire d'inscription</h2>
        
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-2 gap-4">
                <x-inputs.text 
                    label="Prénom"
                    :required="true"
                    name="prenom"
                    placeholder="Votre prénom"
                    :value="old('prenom')"
                    :error="$errors->first('prenom')" />
                
                <x-inputs.text 
                    label="Âge"
                    :required="true"
                    name="age"
                    type="number"
                    placeholder="Votre âge"
                    :value="old('age')"
                    :error="$errors->first('age')" />
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <x-inputs.text 
                    label="Ville"
                    :required="true"
                    name="nom"
                    placeholder="Votre ville"
                    :value="old('nom')"
                    :error="$errors->first('nom')" />
                
                <x-inputs.text 
                    label="Pays"
                    name="pays"
                    placeholder="Votre pays"
                    :value="old('pays')"
                    :error="$errors->first('pays')" />
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <x-inputs.text 
                    label="Téléphone"
                    name="telephone"
                    type="tel"
                    placeholder="+33 6 12 34 56 78"
                    :value="old('telephone')"
                    :error="$errors->first('telephone')" />
                
                <x-inputs.text 
                    label="Email"
                    :required="true"
                    name="email"
                    type="email"
                    placeholder="votre@email.com"
                    :value="old('email')"
                    :error="$errors->first('email')" />
            </div>
            
            <x-inputs.file 
                label="Photo principale"
                :required="true"
                name="photo_principale"
                :error="$errors->first('photo_principale')" />
            
            <x-inputs.textarea 
                label="Présentation courte"
                name="bio"
                placeholder="Parlez-nous de vous, vos passions, vos projets..."
                :maxlength="500"
                rows="4"
                :error="$errors->first('bio')">{{ old('bio') }}</x-inputs.textarea>
            
            <div class="grid grid-cols-2 gap-4">
                <x-inputs.text 
                    label="Mot de passe"
                    :required="true"
                    name="password"
                    type="password"
                    :error="$errors->first('password')" />
                
                <x-inputs.text 
                    label="Confirmer le mot de passe"
                    :required="true"
                    name="password_confirmation"
                    type="password" />
            </div>
            
            <x-buttons.primary type="submit">
                Envoyer ma candidature
            </x-buttons.primary>
            
            <p class="text-xs text-gray-500 text-center mt-4">
                En soumettant ce formulaire, vous acceptez nos conditions d'utilisation et notre politique de confidentialité.
            </p>
        </form>
    </div>
</div>
@endsection
