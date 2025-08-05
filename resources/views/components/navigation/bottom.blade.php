<nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-40">
    <div class="max-w-md mx-auto px-4 py-2">
        <div class="flex justify-around">
            <a href="{{ route('home') }}" class="flex flex-col items-center py-2 px-3 {{ request()->routeIs('home') ? 'text-miss-pink' : 'text-gray-500' }}">
                <svg class="w-6 h-6 mb-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                <span class="text-xs">Accueil</span>
            </a>
            
            <a href="{{ route('candidates.index') }}" class="flex flex-col items-center py-2 px-3 {{ request()->routeIs('candidates.*') ? 'text-miss-pink' : 'text-gray-500' }}">
                <svg class="w-6 h-6 mb-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-xs">Candidates</span>
            </a>
            
            <a href="{{ route('register') }}" class="flex flex-col items-center py-2 px-3 {{ request()->routeIs('register') ? 'text-miss-pink' : 'text-gray-500' }}">
                <svg class="w-6 h-6 mb-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                </svg>
                <span class="text-xs">S'inscrire</span>
            </a>
            
            <a href="#" class="flex flex-col items-center py-2 px-3 text-gray-500">
                <svg class="w-6 h-6 mb-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                <span class="text-xs">Voter</span>
            </a>
        </div>
    </div>
</nav>
