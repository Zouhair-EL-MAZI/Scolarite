<!-- Progress Stepper Component -->
<div class="flex items-center justify-between max-w-2xl mx-auto mb-12 px-4">
    @for ($i = 1; $i <= ($steps ?? 3); $i++)
        <div class="flex flex-col items-center gap-2">
            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm {{ $i <= ($currentStep ?? 1) ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant' }}">
                {{ $i }}
            </div>
            <span class="text-[10px] font-headline font-bold uppercase tracking-widest {{ $i <= ($currentStep ?? 1) ? 'text-primary' : 'text-slate-400' }}">
                {{ $stepLabels[$i - 1] ?? 'Step ' . $i }}
            </span>
        </div>
        @if ($i < ($steps ?? 3))
            <div class="flex-1 h-[2px] mx-4 {{ $i < ($currentStep ?? 1) ? 'bg-primary' : 'bg-primary/20' }}"></div>
        @endif
    @endfor
</div>
