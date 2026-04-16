@php
    $_types = collect(App\Models\Request::TYPES ?? [])->toArray();
    $_statuses = collect(App\Models\Request::STATUSES ?? [])->toArray();
@endphp

<x-client.admin-layout title="My Requests" activeRoute="requests">
    <!-- Page Header -->
    <x-client.admin-header 
        title="My Requests"
        description="View and manage all your academic requests, track their status, and access request details."
        :breadcrumb="[
            ['label' => 'Student Portal', 'url' => route('requests.index')],
            ['label' => 'My Requests']
        ]"
    >
        {{-- <x-client.admin-button variant="primary" icon="add" href="{{ route('requests.create') }}">
            New Request
        </x-client.admin-button> --}}
    </x-client.admin-header>

    <!-- Success Message -->
    @if (session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
            <p class="text-green-700 font-semibold">{{ session('success') }}</p>
        </div>
    @endif

    <!-- Error Message -->
    @if (session('error'))
        <div class="mb-6 p-4 bg-rose-50 border border-rose-200 rounded-lg">
            <p class="text-rose-700 font-semibold">{{ session('error') }}</p>
        </div>
    @endif

    <!-- Search & Filter -->
    <x-client.admin-filter-bar 
        action="{{ route('requests.index') }}"
        searchPlaceholder="Search by reference..."
        :filters="[
            [
                'name' => 'type',
                'placeholder' => 'Filter by Type',
                'icon' => 'filter_list',
                'options' => $_types
            ],
            [
                'name' => 'status',
                'placeholder' => 'Filter by Status',
                'icon' => 'radio_button_checked',
                'options' => $_statuses
            ]
        ]"
    />

    <!-- Requests Table -->
    <x-client.admin-section>
        <x-client.admin-table>
            <thead>
                <tr class="border-b border-outline-variant/20">
                    <th class="px-6 py-4 text-left text-sm font-semibold text-on-surface">Reference</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold text-on-surface">Type</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold text-on-surface">Status</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold text-on-surface">Submitted</th>
                    <th class="px-6 py-4 text-right text-sm font-semibold text-on-surface">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($requests ?? [] as $request)
                    <tr class="border-b border-outline-variant/10 hover:bg-surface-container-high transition-colors">
                        <td class="px-6 py-4 text-sm font-mono text-primary">{{ $request->reference }}</td>
                        <td class="px-6 py-4 text-sm">{{ $_types[$request->type] }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold
                                @if($request->status === 'approved') bg-green-100 text-green-700
                                @elseif($request->status === 'pending') bg-amber-100 text-amber-700
                                @elseif($request->status === 'rejected') bg-red-100 text-red-700
                                @elseif($request->status === 'in_review') bg-blue-100 text-blue-700
                                @else bg-gray-100 text-gray-700
                                @endif">
                                {{ $_statuses[$request->status] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm">{{ $request->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('requests.show', $request) }}" class="text-primary hover:text-primary/80 font-medium text-sm">
                                View Details
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-on-surface-variant">
                            No requests found. <a href="{{ route('requests.create') }}" class="text-primary hover:underline">Create one now</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </x-client.admin-table>
    </x-client.admin-section>

    <!-- Pagination -->
    @if(($totalPages ?? 1) > 1)
        {{-- <div class="mt-6 flex items-center justify-center gap-2">
            <x-client.admin-button variant="outlined" size="sm" href="#">← Previous</x-client.admin-button>
            <span class="text-sm text-on-surface-variant">Page {{ $currentPage ?? 1 }} of {{ $totalPages ?? 1 }}</span>
            <x-client.admin-button variant="outlined" size="sm" href="#">Next →</x-client.admin-button>
        </div> --}}
        <div class="p-5 flex justify-between items-center bg-surface-container-low/20">
            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest">Showing {{ $requests->firstItem() }}-{{ $requests->lastItem() }} of {{ $requests->total() }} requests</p>
            {{ $requests->links() }}
        </div>
    @endif
</x-client.admin-layout>