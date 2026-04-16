@props(['active' => ''])

<!-- Admin-style Student Sidebar -->
<aside class="fixed left-0 top-0 h-screen w-64 pt-20 bg-surface-container-low dark:bg-surface-container-low flex flex-col p-4 space-y-2 border-r border-outline-variant/20">
    <div class="mb-8 px-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined">school</span>
            </div>
            <div>
                <h2 class="font-headline font-bold text-on-surface text-sm">Student Portal</h2>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-widest font-bold">Academic Requests</p>
            </div>
        </div>
    </div>

    <nav class="grow space-y-1">
        <a 
            href="{{ route('requests.index') }}"
            class="{{ request()->routeIs('requests.index') ? 'flex items-center gap-3 px-4 py-3 bg-surface-container-highest text-primary shadow-sm rounded-lg font-semibold transition-all' : 'flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg transition-all' }}"
        >
            <span class="material-symbols-outlined">list</span>
            <span class="font-medium">My Requests</span>
        </a>

        <a 
            href="{{ route('requests.create') }}"
            class="{{ request()->routeIs('requests.create') ? 'flex items-center gap-3 px-4 py-3 bg-surface-container-highest text-primary shadow-sm rounded-lg font-semibold transition-all' : 'flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg transition-all' }}"
        >
            <span class="material-symbols-outlined">add_circle</span>
            <span class="font-medium">New Request</span>
        </a>

        <a 
            href="{{ route('profile.show') }}"
            class="{{ request()->routeIs('profile.*') ? 'flex items-center gap-3 px-4 py-3 bg-surface-container-highest text-primary shadow-sm rounded-lg font-semibold transition-all' : 'flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg transition-all' }}"
        >
            <span class="material-symbols-outlined">account_circle</span>
            <span class="font-medium">My Profile</span>
        </a>

        <a 
            href="#"
            class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg transition-all"
        >
            <span class="material-symbols-outlined">file_download</span>
            <span class="font-medium">Downloads</span>
        </a>
    </nav>

    <div class="border-t border-outline-variant/20 pt-4 space-y-1">
        <a 
            href="#"
            class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-highest rounded-lg transition-all"
        >
            <span class="material-symbols-outlined">help_outline</span>
            <span class="font-medium">Help & Support</span>
        </a>

        <form method="POST" action="{{ route('logout.student') }}" class="m-0">
            @csrf
            <button 
                type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 text-error hover:bg-error-container/20 rounded-lg transition-all text-left"
            >
                <span class="material-symbols-outlined">logout</span>
                <span class="font-medium">Logout</span>
            </button>
        </form>
    </div>
</aside>
