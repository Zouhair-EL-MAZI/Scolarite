@props(['currentPage' => 1, 'totalPages' => 3, 'total' => 24, 'perPage' => 5])

@php
    $currentPage = (int) $currentPage;
    $totalPages = (int) $totalPages;
    $start = ($currentPage - 1) * $perPage + 1;
    $end = min($currentPage * $perPage, $total);
@endphp

<div class="px-8 py-4 bg-surface-container-high/30 flex items-center justify-end">
    {{-- <span class="text-xs text-secondary font-medium">Showing {{ $start }} of {{ $total }} requests</span> --}}
    <div class="flex gap-2">
        <button class="p-2 rounded-lg border border-outline-variant/30 text-secondary hover:bg-white transition-colors" {{ $currentPage === 1 ? 'disabled' : '' }}>
            <span class="material-symbols-outlined text-lg">chevron_left</span>
        </button>
        @for ($i = 1; $i <= $totalPages; $i++)
            <button class="px-3 py-1 rounded-lg text-xs font-bold {{ $i === $currentPage ? 'bg-primary text-blue' : 'hover:bg-white text-secondary transition-colors' }}">
                {{ $i }}
            </button>
        @endfor
        <button class="p-2 rounded-lg border border-outline-variant/30 text-secondary hover:bg-white transition-colors" {{ $currentPage === $totalPages ? 'disabled' : '' }}>
            <span class="material-symbols-outlined text-lg">chevron_right</span>
        </button>
    </div>
</div>
