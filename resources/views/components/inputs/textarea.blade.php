@props(['label' => null, 'required' => false, 'error' => null, 'maxlength' => null])

<div class="mb-4">
    @if($label)
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif
    
    <textarea {{ $attributes->merge(['class' => 'w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-miss-pink focus:border-transparent resize-none']) }}>{{ $slot ?? '' }}</textarea>
    
    @if($maxlength)
        <p class="mt-1 text-sm text-gray-500">0/{{ $maxlength }} caractères</p>
    @endif
    
    @if($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>
