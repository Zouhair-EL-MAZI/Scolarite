@props(['breadcrumb' => [], 'title' => 'Page Title', 'description' => ''])

<!-- Admin-style Header Section -->
<header class="flex justify-between items-end mb-12">
    <div class="flex-1">
        @if(count($breadcrumb) > 0)
            <nav class="flex items-center gap-2 text-xs font-bold text-on-surface-variant mb-2 uppercase tracking-widest">
                @foreach($breadcrumb as $index => $item)
                    @if($index > 0)
                        <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                    @endif
                    @if(isset($item['url']))
                        <a href="{{ $item['url'] }}" class="hover:text-primary transition-colors">{{ $item['label'] }}</a>
                    @else
                        <span class="{{ $index === count($breadcrumb) - 1 ? 'text-primary' : '' }}">{{ $item['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        @endif
        <h1 class="text-4xl font-extrabold tracking-tight text-on-surface font-headline">{{ $title }}</h1>
        @if($description)
            <p class="text-on-surface-variant mt-2 max-w-md">{{ $description }}</p>
        @endif
    </div>
    
    @if($slot->isNotEmpty())
        <div class="flex gap-4">
            {{ $slot }}
        </div>
    @endif
</header>
