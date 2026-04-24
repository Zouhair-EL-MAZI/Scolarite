@props(['active' => ''])

<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-screen w-64 pt-20 bg-slate-100 dark:bg-slate-950 flex flex-col p-4 space-y-2 tonal-layering">
    <div class="mb-8 px-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined">account_balance</span>
            </div>
            <div>
                <h2 class="font-['Manrope'] font-black text-blue-950 dark:text-blue-50 text-sm">{{ __('admin.super_admin_control') }}</h2>
                <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">{{ __('admin.institutional_authority') }}</p>
            </div>
        </div>
    </div>
    <nav class="flex-grow space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-150 {{ $active === 'overview' ? 'bg-white text-blue-900 shadow-sm font-semibold' : 'text-slate-600 hover:text-blue-800 hover:bg-slate-200/50' }}" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-medium">{{ __('admin.overview') }}</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-150 {{ $active === 'requests' ? 'bg-white text-blue-900 shadow-sm font-semibold' : 'text-slate-600 hover:text-blue-800 hover:bg-slate-200/50' }}" href="{{ route('admin.requests.index') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
            <span class="font-medium">{{ __('admin.all_requests') }}</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-150 {{ $active === 'directory' ? 'bg-white text-blue-900 shadow-sm font-semibold' : 'text-slate-600 hover:text-blue-800 hover:bg-slate-200/50' }}" href="{{ route('admin.students.index') }}">
            <span class="material-symbols-outlined">group</span>
            <span class="font-medium">{{ __('admin.student_directory') }}</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-150 {{ $active === 'manage-admins' ? 'bg-white text-blue-900 shadow-sm font-semibold' : 'text-slate-600 hover:text-blue-800 hover:bg-slate-200/50' }}" href="{{ route('admin.manage.index') }}">
            <span class="material-symbols-outlined">manage_accounts</span>
            <span class="font-medium">{{ __('admin.manage_administrators') }}</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-150 {{ $active === 'reports' ? 'bg-white text-blue-900 shadow-sm font-semibold' : 'text-slate-600 hover:text-blue-800 hover:bg-slate-200/50' }}" href="#">
            <span class="material-symbols-outlined">analytics</span>
            <span class="font-medium">{{ __('admin.reports') }}</span>
        </a>
    </nav>
    <button class="mx-4 my-6 py-3 px-4 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-lg font-bold text-sm shadow-lg flex items-center justify-center gap-2 active:scale-95 transition-transform">
        <span class="material-symbols-outlined text-sm">add</span>
        {{ __('admin.new_report') }}
    </button>
    <div class="border-t border-slate-200 dark:border-slate-800 pt-4 space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:text-blue-800 dark:hover:text-blue-200 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-lg transition-all" href="#">
            <span class="material-symbols-outlined">contact_support</span>
            <span class="font-medium">{{ __('admin.support') }}</span>
        </a>
        <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-error hover:bg-error/10 rounded-lg transition-all text-left">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-medium">{{ __('admin.logout') }}</span>
            </button>
        </form>
    </div>
</aside>