<!-- Form Section: Request Type Selection -->
<section class="bg-surface-container-low p-1 rounded-xl">
    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm">
        <div class="flex items-start gap-4 mb-8">
            <div class="w-12 h-12 bg-blue-50 text-secondary rounded-xl flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined">category</span>
            </div>
            <div>
                <h3 class="text-xl font-headline font-bold text-primary">{{ __('portal.requests.create.type_selection.title') }}</h3>
                <p class="text-sm text-on-surface-variant">{{ __('portal.requests.create.type_selection.description') }}</p>
            </div>
        </div>
        <div class="space-y-3">
            @foreach ($types as $key => $label)
                <label class="relative flex items-center p-4 border-2 transition-all rounded-xl cursor-pointer hover:border-primary/50 {{ old('type', $selectedType) === $key ? 'border-primary bg-primary/5' : 'border-outline-variant/30' }}">
                    <input type="radio" name="type" value="{{ $key }}" class="hidden peer" {{ old('type', $selectedType) === $key ? 'checked' : '' }} required />
                    <div class="flex flex-col flex-1">
                        @php
                            $translationKey = 'admin.request_types.' . $key;
                            $translatedLabel = __($translationKey);
                        @endphp
                        <span class="font-headline font-bold text-primary text-sm">{{ $translatedLabel === $translationKey ? $label : $translatedLabel }}</span>
                        <span class="text-xs text-on-surface-variant mt-1">
                            {{ __('portal.requests.create.type_selection.descriptions.' . $key) }}
                        </span>
                    </div>
                    <span class="material-symbols-outlined ml-4 text-primary opacity-0 peer-checked:opacity-100 transition-opacity" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                </label>
            @endforeach
        </div>
    </div>
</section>
