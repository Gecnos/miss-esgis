@extends('layouts.app')

@section('title', 'Connexion - Miss Élégance 2024')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold gradient-text mb-4">Connexion</h1>
        <p class="text-gray-600">Accédez à votre espace candidate</p>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm p-6">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            @include('components.inputs.text', [
                'label' => 'Email',
                'required' => true,
                'name' => 'email',
                'type' => 'email',
                'placeholder' => 'votre@email.com',
                'value' => old('email'),
                'error' => $errors->first('email')
            ])
            
            @include('components.inputs.text', [
                'label' => 'Mot de passe',
                'required' => true,
                'name' => 'password',
                'type' => 'password',
                'placeholder' => 'Votre mot de passe',
                'error' => $errors->first('password')
            ])
            
            @include('components.buttons.primary', [
                'type' => 'submit'
            ])
                Se connecter
            @endcomponent
        </form>
        
        <div class="mt-6 text-center">
            <p class="text-gray-600">
                Pas encore inscrite ? 
                <a href="{{ route('register') }}" class="text-miss-pink font-medium hover:underline">
                    Devenir candidate
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
