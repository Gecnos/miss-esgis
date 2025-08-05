@props(['type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'w-full py-3 px-4 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors']) }}>
    {{ $slot }}
</button>
