@props(['title' => 'Academic Curator'])

<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface">
    <!-- Simple Top Nav -->
    <x-top-nav-bar />
    
    {{-- <nav class="fixed top-0 w-full z-50 bg-slate-50/80 backdrop-blur-xl flex justify-between items-center px-12 h-20">
        <div class="text-xl font-extrabold tracking-tighter text-blue-950">Academic Curator</div>
        <div class="hidden md:flex items-center space-x-10 font-headline font-bold tracking-tight">
            <a class="text-slate-500 hover:text-blue-900 transition-colors" href="#">Dashboard</a>
            <a class="text-blue-950 font-bold border-b-2 border-blue-900 pb-1" href="#">Requests</a>
            <a class="text-slate-500 hover:text-blue-900 transition-colors" href="#">Profile</a>
        </div>
        <div class="flex items-center space-x-6">
            <button class="text-slate-500 hover:bg-slate-200/50 p-2 rounded-full transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="text-slate-500 hover:text-blue-900 transition-colors font-headline font-bold text-sm">Logout</button>
        </div>
    </nav> --}}

    <!-- Main Content -->
    <main class="pt-32 pb-20 max-w-[1440px] mx-auto px-12">
        <div class="max-w-3xl mx-auto">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-12 px-12 text-slate-400 text-[10px] uppercase tracking-[0.3em] font-medium text-center">
        Academic Curator © {{ now()->year }} • University Administration Systems
    </footer>
</body>
</html>
