<x-app-layout title="My Requests" activeRoute="requests">
    <!-- Hero Header Section & Search -->
    <x-page-header 
        title="My Requests"
        searchPlaceholder="Search by type or status..."
    />

    <!-- Stats Grid -->
    {{-- <x-stats-grid 
        :totalRequests="24"
        :newThisMonth="2"
        :pendingRequests="3"
    /> --}}

    <!-- Data Table Section -->
    <x-request-data-table :requests="$requests ?? []" />

    <!-- Pagination -->
    {{-- <x-pagination 
        :currentPage="$currentPage ?? 1"
        :totalPages="$totalPages ?? 3"
        :total="$total ?? 24"
        :perPage="$perPage ?? 5"
    /> --}}

    <!-- Footer -->
    {{-- <x-page-footer /> --}}
</x-app-layout>