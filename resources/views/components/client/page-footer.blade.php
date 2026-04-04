@props(['year' => now()->year, 'organization' => 'Office of the Registrar'])

<div class="mt-12 text-center">
    <p class="text-xs text-outline font-label uppercase tracking-widest">© {{ $year }} Academic Curator | {{ $organization }}</p>
</div>
