<!-- Form Section: Additional Comments -->
<section class="bg-surface-container-low p-1 rounded-xl">
    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm">
        <div class="flex items-start gap-4 mb-6">
            <div class="w-12 h-12 bg-blue-50 text-secondary rounded-xl flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">chat_bubble</span>
            </div>
            <div>
                <h3 class="text-xl font-headline font-bold text-primary">{{ __('portal.requests.create.comments.title') }}</h3>
                <p class="text-sm text-on-surface-variant">{{ __('portal.requests.create.comments.description') }}</p>
            </div>
        </div>
        <textarea name="comment" rows="4" placeholder="{{ __('portal.requests.create.comments.placeholder') }}" class="w-full bg-surface-container-highest border-none rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all font-body resize-none">{{ old('comment') }}</textarea>
    </div>
</section>
