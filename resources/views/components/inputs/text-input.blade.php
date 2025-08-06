@props(['disabled' => false, 'type' => 'text'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-primary-pink focus:ring-primary-pink rounded-md shadow-sm']) !!} type="{{ $type }}">
