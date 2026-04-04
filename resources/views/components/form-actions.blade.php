@props(['submitText' => 'Submit', 'cancelText' => 'Cancel', 'cancelUrl' => '#'])

<div class="flex items-center justify-end gap-4 pt-6">
    <a  href="{{ route('requests.index') }}"  class="bg-surface-container-high text-on-surface px-8 py-4 rounded-xl font-bold text-sm tracking-tight hover:bg-surface-variant transition-all">
        {{ $cancelText }}
    </a>
    <button class="bg-primary text-blue px-10 py-4 rounded-xl font-bold text-sm tracking-tight shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all" type="submit">
        {{ $submitText }}
    </button>
</div>
