@props(['totalRequests' => 24, 'newThisMonth' => 2, 'pendingRequests' => 3])

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
    <div class="col-span-1 bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/10">
        <p class="text-xs font-bold text-outline uppercase tracking-wider mb-2">Total Requests</p>
        <div class="flex items-end justify-between">
            <span class="text-3xl font-bold text-primary">{{ $totalRequests }}</span>
            <span class="text-xs text-green-600 font-bold bg-green-50 px-2 py-1 rounded-full">+{{ $newThisMonth }} this month</span>
        </div>
    </div>
    <div class="col-span-1 bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant/10">
        <p class="text-xs font-bold text-outline uppercase tracking-wider mb-2">Pending Action</p>
        <div class="flex items-end justify-between">
            <span class="text-3xl font-bold text-primary">{{ $pendingRequests }}</span>
            <span class="material-symbols-outlined text-amber-500" style="font-variation-settings: 'FILL' 1;">pending</span>
        </div>
    </div>
    <div class="col-span-2 relative overflow-hidden bg-primary-container p-6 rounded-xl group">
        <div class="relative z-10">
            <p class="text-xs font-bold text-primary-fixed uppercase tracking-wider mb-2">Need Help?</p>
            <h3 class="text-xl font-bold text-white mb-2 leading-tight">View our request guide for <br/> faster processing times.</h3>
            <button class="text-xs font-bold text-white underline decoration-primary-fixed underline-offset-4 hover:text-primary-fixed transition-colors">Read Documentation</button>
        </div>
        <div class="absolute -right-4 -bottom-4 opacity-20 transition-transform group-hover:scale-110 duration-500">
            <span class="material-symbols-outlined text-[120px] text-white">menu_book</span>
        </div>
    </div>
</div>
