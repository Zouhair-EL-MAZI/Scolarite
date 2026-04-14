<!-- Page Hero Section with Title and CTA Button -->
<section class="px-6 py-8">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="space-y-1">
            <h2 class="text-4xl font-extrabold tracking-tight text-primary">{{ $title ?? 'My Requests' }}</h2>
            <p class="text-on-surface-variant font-medium">{{ $subtitle ?? 'Track and manage your academic administrative applications' }}</p>
        </div>
        <a href="{{ route('requests.create') }}" class="bg-primary text-on-primary px-6 py-3 rounded-xl font-manrope font-bold flex items-center justify-center space-x-2 shadow-lg shadow-primary/10 hover:opacity-90 transition-all active:scale-95 w-fit">
            <span class="material-symbols-outlined">add</span>
            <span>New Request</span>
        </a>
    </div>
</section>
