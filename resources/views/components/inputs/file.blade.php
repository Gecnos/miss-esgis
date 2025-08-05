@props(['label', 'required' => false, 'error' => null, 'accept' => 'image/*'])

<div class="mb-4">
    @if($label)
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif
    
    <div class="relative">
        <input type="file" {{ $attributes->merge(['class' => 'hidden', 'accept' => $accept]) }} id="file-input">
        <label for="file-input" class="flex items-center justify-center w-full py-3 px-4 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-miss-pink transition-colors">
            <div class="text-center">
                <div class="w-12 h-12 mx-auto mb-2 gradient-bg rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <p class="text-sm font-medium text-miss-pink">Choisir un fichier</p>
                <p class="text-xs text-gray-500 mt-1">Aucun fichier choisi</p>
            </div>
        </label>
    </div>
    
    <p class="mt-1 text-xs text-gray-500">Format accepté : JPG, PNG (max 5MB)</p>
    
    @if($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>
