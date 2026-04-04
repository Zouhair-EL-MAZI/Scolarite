@props(['title' => '', 'subtitle' => '', 'breadcrumb' => ''])

<header class="mb-12 space-y-2">
    @if($breadcrumb)
        <p class="text-secondary font-medium tracking-wide uppercase text-xs">{{ $breadcrumb }}</p>
    @endif
    <h1 class="text-5xl font-extrabold text-primary tracking-tight">{{ $title }}</h1>
    @if($subtitle)
        <p class="text-on-surface-variant text-lg">{{ $subtitle }}</p>
    @endif
</header>
