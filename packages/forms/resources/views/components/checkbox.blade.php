@props([
    'errorKey' => null,
    'extraAttributes' => [],
    'name' => null,
    'nameAttribute' => 'name',
])

<input
    @if ($name) {{ $nameAttribute }}="{{ $name }}" @endif
    type="checkbox"
    {{ $attributes->merge(array_merge([
        'class' => 'rounded text-secondary-700 shadow-sm focus:border-secondary-700 focus:ring focus:ring-secondary-200 focus:ring-opacity-50 ' . ($errors->has($errorKey) ? 'border-danger-600 ' : 'border-gray-300'),
    ], $extraAttributes)) }}
/>