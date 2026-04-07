@props(['title' => 'My Requests', 'subtitle' => '', 'searchPlaceholder' => 'Search...'])

<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
    <div class="space-y-2">
        {{-- <span class="text-on-primary-container font-label text-xs font-bold uppercase tracking-[0.2em]"></span> --}}
        <h1 class="text-5xl font-extrabold tracking-tighter text-primary">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-secondary max-w-md">{{ $subtitle }}</p>
        @endif
    </div>
    <div class="flex items-center gap-3">
        <div class="relative">
            <input class="bg-surface-container-low border-none rounded-xl py-3 pl-11 pr-6 text-sm w-80 focus:ring-2 focus:ring-primary/10 transition-all placeholder:text-outline" placeholder="{{ $searchPlaceholder }}" type="text"/>
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
        </div>
        <button class="bg-surface-container-highest p-3 rounded-xl hover:bg-surface-dim transition-colors">
            <span class="material-symbols-outlined">filter_list</span>
        </button>
    </div>
</div>
