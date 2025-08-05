@props(['type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'w-full py-3 px-4 gradient-bg text-white rounded-lg font-medium hover:opacity-90 transition-opacity']) }}>
    {{ $slot }}
</button>
