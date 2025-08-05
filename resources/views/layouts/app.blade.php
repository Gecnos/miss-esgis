<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Miss Élégance 2024')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'miss-pink': '#E91E63',
                        'miss-coral': '#FF6B9D',
                        'miss-orange': '#FFA726'
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #E91E63 0%, #FF6B9D 50%, #FFA726 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #E91E63 0%, #FF6B9D 50%, #FFA726 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    @include('components.navigation.header')
    
    <main class="pb-20">
        @yield('content')
    </main>

    @include('components.navigation.bottom')
</body>
</html>
