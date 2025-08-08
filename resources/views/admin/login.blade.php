@extends('layouts.base')
@php
$titre ='Connexion miss';

@endphp

@section('title', $titre)
@vite('resources/css/stylelogin.css')
@section('content')
<div class="flexe">
        <nav class="nav">
            <div class="logo">Miss Élégance</div>
        </nav>

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

        <form action="" class="card rounded admin-login" method="POST">
            @csrf
            <h1>Admin Login</h1>
            <input type="email" name="email" placeholder="Votre email" class="rounded">
            <div>
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <input type="password" name="password" placeholder="Mot de passe" class="rounded">
            <div>
                @error('password')
                    {{$message}}
                @enderror
            </div>
            <button type="submit" class="connexion">Se connecter</button>
        </form>
        </div>
@endsection
