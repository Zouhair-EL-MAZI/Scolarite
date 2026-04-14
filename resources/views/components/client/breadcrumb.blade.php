<!-- Breadcrumb Navigation -->
<nav class="mb-6">
    <ol class="flex items-center gap-2 text-sm font-medium text-slate-500">
        @foreach ($breadcrumbs ?? [] as $breadcrumb)
            @if (!$loop->last)
                <li><a class="hover:text-primary transition-colors" href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
                <li><span class="material-symbols-outlined text-xs">chevron_right</span></li>
            @else
                <li class="text-primary font-semibold">{{ $breadcrumb['label'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>
