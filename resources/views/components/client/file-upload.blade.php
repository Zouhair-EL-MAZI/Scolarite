@props(['name' => 'attachments', 'maxSize' => '10MB', 'acceptedFormats' => 'PDF, JPG, PNG'])

<div class="border-2 border-dashed border-slate-200 rounded-xl p-12 flex flex-col items-center justify-center bg-surface-container-low hover:bg-surface-container-high hover:border-primary transition-all cursor-pointer group">
    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-primary mb-4 group-hover:scale-110 transition-transform">
        <span class="material-symbols-outlined text-2xl">upload_file</span>
    </div>
    <p class="text-sm font-semibold text-primary">Drag files here or <span class="text-blue-600 underline underline-offset-4 decoration-2">browse computer</span></p>
    <p class="text-[10px] text-slate-500 mt-2 uppercase tracking-widest font-bold">{{ $acceptedFormats }} up to {{ $maxSize }}</p>
    <input type="file" name="{{ $name }}" class="hidden" multiple accept=".pdf,.jpg,.jpeg,.png" />
</div>
