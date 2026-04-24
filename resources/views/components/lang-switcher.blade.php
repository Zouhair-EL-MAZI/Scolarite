@php
    $current = app()->getLocale();
    $options = [
        'en' => 'English',
        'fr' => 'Français',
    ];
@endphp

<div class="relative inline-block text-left lang-dropdown group">
    <button type="button" tabindex="0" class="flex items-center gap-2 px-3 py-1 rounded-xl bg-surface-container-lowest hover:bg-surface-container transition focus:outline-none">
        <span class="text-sm font-medium">{{ strtoupper($current) }}</span>
        <span class="material-symbols-outlined text-sm">expand_more</span>
    </button>

    <div class="hidden group-focus-within:block absolute right-0 mt-2 w-44 bg-white border border-slate-200 rounded-lg shadow-lg z-50">
        @foreach($options as $code => $label)
            <a href="{{ route('locale.switch', $code) }}" class="block px-3 py-2 hover:bg-slate-50">{{ $label }}</a>
        @endforeach
    </div>
</div>
