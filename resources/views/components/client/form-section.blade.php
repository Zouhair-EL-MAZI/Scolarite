@props(['step' => 1, 'title' => ''])

<div class="space-y-4">
    <div class="flex items-center gap-3">
        <span class="w-6 h-6 rounded-full bg-secondary-container text-primary text-[10px] flex items-center justify-center font-bold">{{ str_pad($step, 2, '0', STR_PAD_LEFT) }}</span>
        <h2 class="text-sm font-bold text-primary uppercase tracking-wider">{{ $title }}</h2>
    </div>
    <div class="space-y-4">
        {{ $slot }}
    </div>
</div>
