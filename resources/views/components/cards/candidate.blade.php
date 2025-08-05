<div class="bg-white rounded-xl shadow-sm overflow-hidden relative">
    @if($candidate->votes_count > 0 && $isTopCandidate ?? false)
        <div class="absolute top-3 left-3 z-10">
            <span class="bg-miss-pink text-white text-xs px-2 py-1 rounded-full">👑 Top Miss</span>
        </div>
    @endif
    
    <div class="aspect-square bg-gray-200 overflow-hidden">
        <img src="{{ $candidate->photo_url }}" 
             alt="{{ $candidate->full_name }}" 
             class="w-full h-full object-cover">
    </div>
    
    <div class="p-4">
        <h3 class="font-semibold text-gray-900 mb-1">{{ $candidate->full_name }}</h3>
        <p class="text-sm text-gray-500 mb-2">{{ $candidate->pays }}</p>
        <p class="text-sm font-medium text-miss-pink mb-3">{{ $candidate->votes_count }} votes</p>
        
        <div class="flex space-x-2">
            <a href="{{ route('candidate.show', $candidate->id) }}" 
               class="flex-1 text-center py-2 px-3 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">
                Voir profil
            </a>
            <a href="{{ route('vote.show', $candidate->id) }}" 
               class="flex-1 text-center py-2 px-3 gradient-bg text-white rounded-lg text-sm hover:opacity-90">
                Voter
            </a>
        </div>
    </div>
</div>
