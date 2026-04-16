@props(['title' => '', 'description' => ''])

<section class="bg-surface-container-lowest rounded-2xl p-8 shadow-sm border border-outline-variant/10">
    @if($title)
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-on-surface font-headline">{{ $title }}</h2>
            @if($description)
                <p class="text-on-surface-variant mt-2">{{ $description }}</p>
            @endif
        </div>
    @endif
    
    {{ $slot }}
</section>
