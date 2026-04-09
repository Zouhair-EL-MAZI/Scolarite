@props(['userImage' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDL4zJLKDrXqwbIvgtM_z0DLLvl5oVoAc_lV7skM7iHtNCiPZ4t4Wpyv71UlSAh6fdxxYf1ETRLu1tYjZ1xvGWTdRKBq1mGsY5TpNyuaJh9HyrfIo3yRSEwYvCMOiEuJXMIfGWH5oTP16wq80QJqjqSyeOJzE8I1EDRSHgxug20sASt0hMRRiCUyJ_91bSgLgGeKnVek8olAThqpwGqCMKxy9mcLBYD4bfku_RjyrYKIMfxUY7v-xacqvDhbXN0D0yOLDXUHrgySTE'])

<header class="fixed top-0 z-50 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none flex justify-between items-center px-8 py-3">
    <div class="flex items-center gap-8">
        <span class="text-xl font-bold tracking-tighter text-blue-900 dark:text-blue-50 font-headline">Academic Curator</span>
        <nav class="hidden md:flex gap-6 items-center font-headline text-sm font-medium tracking-tight">
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 transition-colors" href="#">Dashboard</a>
            <a class="text-blue-900 dark:text-white border-b-2 border-blue-900 dark:border-blue-400 pb-1" href="#">Requests</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-blue-700 transition-colors" href="#">Archive</a>
        </nav>
    </div>
    <div class="flex items-center py-1 gap-4">
        {{-- <div class="relative hidden sm:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
            <input class="bg-slate-100 dark:bg-slate-800 border-none rounded-full py-1.5 pl-9 pr-4 text-xs w-64 focus:ring-2 focus:ring-blue-900/20" placeholder="Search resources..." type="text"/>
        </div>
        <button class="material-symbols-outlined text-slate-600 hover:bg-slate-200/50 p-2 rounded-lg transition-all active:scale-95">notifications</button>
        <button class="material-symbols-outlined text-slate-600 hover:bg-slate-200/50 p-2 rounded-lg transition-all active:scale-95">help_outline</button> --}}
        <img alt="User profile photo" class="w-8 h-8 rounded-full object-cover" src="{{ $userImage }}"/>
    </div>
</header>
