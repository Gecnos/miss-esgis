<div class="mb-4">
    @isset($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
            {{ $label }} @if(!empty($required)) <span class="text-red-500">*</span>@endif
        </label>
    @endisset

    <x-inputs.text-input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        placeholder="{{ $placeholder ?? '' }}"
        :value="isset($value) ? $value : null"
        @if(!empty($required)) required @endif
        class="mt-1 block w-full"
    />

    @if(!empty($error))
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>
