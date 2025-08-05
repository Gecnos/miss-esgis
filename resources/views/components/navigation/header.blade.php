<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-md mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gradient-to-r from-miss-pink to-miss-coral rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-sm">M</span>
            </div>
            <span class="font-semibold text-gray-800">Miss Élégance</span>
        </div>
        
        <nav class="flex items-center space-x-1">
            <a href="{{ route('home') }}" class="flex items-center space-x-1 px-3 py-2 rounded-lg text-sm {{ request()->routeIs('home') ? 'bg-miss-pink text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                <span>Accueil</span>
            </a>
            
            <a href="{{ route('candidates.index') }}" class="flex items-center space-x-1 px-3 py-2 rounded-lg text-sm {{ request()->routeIs('candidates.*') ? 'bg-miss-pink text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                </svg>
                <span>Candidates</span>
            </a>
            
            <a href="{{ route('register') }}" class="flex items-center space-x-1 px-3 py-2 rounded-lg text-sm {{ request()->routeIs('register') ? 'bg-miss-pink text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                </svg>
                <span>S'inscrire</span>
            </a>
            
            <a href="#" class="flex items-center space-x-1 px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-100">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                <span>Voter</span>
            </a>
        </nav>
    </div>
</header>
