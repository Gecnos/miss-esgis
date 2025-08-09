@extends('layouts.base')

@section('title', 'Connexion - Miss ESGIS')

@section('content')
<div class="max-w-md mx-auto px-4 py-6">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold gradient-text mb-4">Connexion</h1>
        <p class="text-gray-600">Accédez à votre espace candidate</p>
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


    <div class="bg-white rounded-xl shadow-sm p-6">
        <form action="" method="POST">
            @csrf
            <h1>Connexion</h1>
            Email *
            <input type="email" name="email" placeholder="Votre email" class="rounded">
            <div>
                @error('email')
                    {{$message}}
                @enderror
            </div>
            Mot de passe *
            <input type="password" name="password" placeholder="Mot de passe" class="rounded">
            <div>
                @error('password')
                    {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary connexion">Se connecter</button>
        </form>
    </div>
</div>
@endsection
