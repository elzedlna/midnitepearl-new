@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button'
])

@php
    $variants = [
        'primary' => 'bg-[#4bc9bd] hover:bg-[#38b3a9] text-white',
        'outline' => 'border border-gray-300',
        'ghost' => 'hover:bg-gray-100 text-gray-700',
    ];

    $sizes = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-6 py-3 text-base',
        // lg
];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center justify-center font-medium rounded transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2',
        $variants[$variant] ?? $variants['primary'],
        $sizes[$size] ?? $sizes['md'],
    ]) }}
>
    {{ $slot }}
</button>