<x-admin.layout title="Super Admin Control - Manage Administrators">
    <x-admin.navbar />
    <x-admin.sidebar />

    <!-- Main Canvas -->
    <main class="ml-72 flex-1 flex flex-col">
        <!-- TopAppBar -->
        <header class="sticky top-0 z-30 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm px-8 py-4 flex justify-between items-center">
            <div class="flex flex-col gap-4 flex-1">
                <div class="flex items-center space-x-2 text-xs text-slate-500 font-bold tracking-wide uppercase">
                    <span>Admin</span>
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                    <span class="text-primary font-bold">Manage Administrators</span>
                </div>
                <div class="relative max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
                    <input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low rounded-xl border-none focus:ring-2 focus:ring-primary/20 text-sm placeholder-slate-400 transition-all" placeholder="Search by name or email..." type="text"/>
                </div>
            </div>
            <div class="flex items-center space-x-6 ml-12">
                <button class="relative p-2 text-slate-500 hover:text-primary transition-colors hover:bg-slate-100 rounded-full">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <div class="flex items-center space-x-3 border-l border-slate-200 pl-6">
                    <div class="text-right hidden md:block">
                        <div class="text-sm font-bold text-slate-900 font-headline">Dr. Alistair Vance</div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-black bg-tertiary-fixed text-on-tertiary-fixed uppercase tracking-tighter mt-1">Super Admin</span>
                    </div>
                    <img alt="Admin Profile" class="w-10 h-10 rounded-xl object-cover ring-2 ring-surface-container-high" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfEoGG801aGmZgi8hB_qPatguwk--QGHafqW6OTVPQOlKmQ1PM012ivCN8dFqUasdn1ugMNocDoTeP2ShOnXRZkVTy6_7k-ZhvpnnPOqDlkg7FKMhvxahK0mpmOzU16sCI39G0WzUxS0Uc4-2EOLLqMFRBh1N55QaHxT28LcHFeCM5P-VtlCpMUUddLUYz7EKtB8O0G7hBqYmBkUJaWxVV3Pp0cCpw9WpeGi1UoKG5WyYiZa8QvjuSN75_UJh1mWWjlU8X63jQBiI"/>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="flex-1 p-8 space-y-10 overflow-y-auto">
            <!-- Stats Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <p class="text-xs font-medium text-slate-500 mb-2 uppercase tracking-wider">Total System Admins</p>
                            <h3 class="text-4xl font-black text-primary font-headline">{{ $totalAdmins ?? 42 }}</h3>
                        </div>
                        <div class="p-3 bg-blue-50 text-primary rounded-xl group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-2xl">admin_panel_settings</span>
                        </div>
                    </div>
                    <div class="flex items-center text-xs text-green-600 font-bold">
                        <span class="material-symbols-outlined text-sm mr-1">trending_up</span>
                        <span>+4 this month</span>
                    </div>
                </div>

                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <p class="text-xs font-medium text-slate-500 mb-2 uppercase tracking-wider">Active Sessions</p>
                            <h3 class="text-4xl font-black text-primary font-headline">{{ $activeSessions ?? 12 }}</h3>
                        </div>
                        <div class="p-3 bg-green-50 text-green-700 rounded-xl group-hover:bg-green-600 group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-2xl">lan</span>
                        </div>
                    </div>
                    <div class="flex items-center text-xs text-slate-500 font-medium">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        <span>System Stable</span>
                    </div>
                </div>

                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <p class="text-xs font-medium text-slate-500 mb-2 uppercase tracking-wider">Security Alerts</p>
                            <h3 class="text-4xl font-black text-primary font-headline">{{ $securityAlerts ?? 0 }}</h3>
                        </div>
                        <div class="p-3 bg-red-50 text-error rounded-xl group-hover:bg-error group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-2xl">gpp_maybe</span>
                        </div>
                    </div>
                    <div class="text-xs text-slate-500 font-medium">
                        <span>Last check: 2 mins ago</span>
                    </div>
                </div>
            </section>

            <!-- Action Bar -->
            <section class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="relative flex-grow max-w-2xl">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">filter_list</span>
                    <input class="w-full pl-12 pr-4 py-4 bg-surface-container-low rounded-2xl border-none focus:ring-2 focus:ring-primary/10 text-sm font-medium placeholder-slate-400" placeholder="Filter admins by name, email, or department..." type="text"/>
                </div>
                <a href="{{ route('superadmin.admins.create') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl bg-gradient-to-br from-primary to-primary-container text-white shadow-lg shadow-primary/20 hover:shadow-xl active:scale-95 transition-all font-bold tracking-tight">
                    <span class="material-symbols-outlined">add</span>
                    <span>Add New Admin</span>
                </a>
            </section>

            <!-- Admin Table -->
            <section class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low/50">
                                <th class="px-8 py-5 text-xs font-black text-slate-600 uppercase tracking-widest font-headline">Administrator Name</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-600 uppercase tracking-widest font-headline">Email Address</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-600 uppercase tracking-widest font-headline">Date Added</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-600 uppercase tracking-widest font-headline text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($admins ?? [] as $admin)
                                <tr class="hover:bg-slate-50/80 transition-colors group">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white font-bold text-xs font-headline ring-2 ring-offset-1 ring-slate-100">
                                                {{ strtoupper(substr($admin->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <div class="text-sm font-bold text-primary font-headline">{{ $admin->name }}</div>
                                                <div class="text-xs text-slate-500">{{ $admin->role === 'super_admin' ? 'Institutional Authority' : 'Administrator' }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5 text-sm text-slate-700 font-medium">{{ $admin->email }}</td>
                                    <td class="px-8 py-5 text-sm text-slate-600">{{ $admin->created_at->format('M d, Y') }}</td>
                                    <td class="px-8 py-5 text-center">
                                        <div class="flex items-center justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('superadmin.admins.show', $admin) }}" class="p-2.5 text-slate-600 hover:text-primary hover:bg-slate-100 rounded-full transition-all" title="View">
                                                <span class="material-symbols-outlined text-lg">visibility</span>
                                            </a>
                                            <a href="{{ route('superadmin.admins.edit', $admin) }}" class="p-2.5 text-slate-600 hover:text-primary hover:bg-slate-100 rounded-full transition-all" title="Edit">
                                                <span class="material-symbols-outlined text-lg">edit</span>
                                            </a>
                                            @if($admin->role !== 'super_admin')
                                                <form method="POST" action="{{ route('superadmin.admins.destroy', $admin) }}" onsubmit="return confirm('Delete this administrator?');" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="p-2.5 text-red-600 hover:bg-red-50 rounded-full transition-all" title="Delete">
                                                        <span class="material-symbols-outlined text-lg">delete</span>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-8 py-12 text-center text-sm text-slate-500">No administrator records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-8 py-5 bg-surface-container-low/30 flex items-center justify-between border-t border-slate-100">
                    <span class="text-xs text-slate-600 font-medium">Showing {{ $admins->firstItem() ?? 1 }} of {{ $admins->total() ?? 0 }} entries</span>
                    <div class="flex space-x-2">
                        {{ $admins->links() }}
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="text-center pt-6">
                <p class="text-[10px] text-slate-400 uppercase tracking-[0.2em] font-medium">Secured Node Protocol v4.2 // Encrypted Academic Stream</p>
            </footer>
        </div>
    </main>
</x-admin.layout>
