@props(['title' => '', 'icon' => '', 'value' => '', 'subtitle' => '', 'color' => 'primary'])

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/10 flex items-start gap-4">
    @if($icon)
        <div class="w-12 h-12 rounded-xl bg-{{ $color }}/10 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-{{ $color }}">{{ $icon }}</span>
        </div>
    @endif
    
    <div class="flex-1">
        <p class="text-sm text-on-surface-variant font-medium mb-1">{{ $title }}</p>
        @if($value)
            <p class="text-2xl font-bold text-on-surface font-headline">{{ $value }}</p>
        @endif
        @if($subtitle)
            <p class="text-xs text-on-surface-variant mt-2">{{ $subtitle }}</p>
        @endif
    </div>

    @if($slot->isNotEmpty())
        <div class="flex-shrink-0">
            {{ $slot }}
        </div>
    @endif
</div>
