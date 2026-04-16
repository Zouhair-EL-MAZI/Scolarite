@props(['variant' => 'primary', 'size' => 'md', 'icon' => '', 'class' => ''])

@php
    $variants = [
        'primary' => 'bg-primary text-on-primary hover:opacity-90',
        'secondary' => 'bg-secondary text-on-secondary hover:opacity-90',
        'outlined' => 'bg-transparent border border-outline text-on-surface hover:bg-surface-container-high',
        'tonal' => 'bg-primary/10 text-primary hover:bg-primary/20',
        'error' => 'bg-error text-on-error hover:opacity-90',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<button {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 rounded-lg font-semibold font-headline shadow-lg transition-all active:scale-95 $variantClass $sizeClass $class"]) }}>
    @if($icon)
        <span class="material-symbols-outlined {{ $size === 'sm' ? 'text-sm' : 'text-base' }}">{{ $icon }}</span>
    @endif
    {{ $slot }}
</button>
