@extends('layouts.base')

@section('title', 'Connexion - Miss ESGIS')

@section('content')
<div class="max-w-md mx-auto px-4 py-6 d-flex justify-content-center">
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Connexion</h1>
        <p class="text-lg text-text-gray-600">Accédez à votre espace candidate</p>
    </div>

    @if(session('error'))
                <div id="showtoast" class="alert alert-danger">{{ session('error') }}</div>
                  <script>

                setTimeout(()=>
            {
               if(document.getElementById('showtoast'))
                {
                    document.getElementById('showtoast').style.opacity='0'
                    setTimeout(()=>
                {
                    document.getElementById('showtoast')?.remove()
                },500)
                }
            },3000)
            </script>
        @endif


    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 max-w-2xl mx-auto">
        <form action="" method="POST">
            @csrf
            <div>
            <label for="email" class="block text-lg font-medium text-text-gray-700">Email *</label>
            <x-inputs.text-input id="email" name="email" type="email" class="mt-1 block w-full" placeholder="Votre email" required value="{{ old('email') }}" />
            <div>
                @error('email')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div>
            <label for="password" class="block text-lg font-medium text-text-gray-700">Mot de passe *</label>
            <x-inputs.text-input id="password" name="password" type="password" class="mt-1 block w-full" placeholder="Mot de passe" required value="{{ old('password') }}" />
            <div>
                @error('password')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div class="md:col-span-2 mt-4">
                <x-buttons.primary-button type="submit" class="btn btn-primary connexion">Se connecter</x-buttons.primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
