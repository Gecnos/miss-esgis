<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion admin</title>
  @vite('resources/css/stylelogin.css')
</head>
<body class="flex">
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
            <button type="submit">Se connecter</button>
        </form>
    </body>
</html>
