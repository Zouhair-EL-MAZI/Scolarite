{{--
    Request Search & Filter Component
    --------------------------------------------------
    Props / Variables (pass from parent view or controller):
      $searchPlaceholder  (string, optional) – placeholder text for the search input
      $types              (array, optional)  – list of request type options
      $statuses           (array, optional)  – list of status options
      $searchValue        (string, optional) – current search query (for live binding / old input)
      $selectedType       (string, optional) – currently selected type filter
      $selectedStatus     (string, optional) – currently selected status filter

    Usage:
      @include('components.request-search-filter')

      — or, as an anonymous component (resources/views/components/request-search-filter.blade.php):
      <x-request-search-filter
          :types="$types"
          :statuses="$statuses"
          :searchValue="old('search', $searchValue ?? '')"
          :selectedType="old('type', $selectedType ?? '')"
          :selectedStatus="old('status', $selectedStatus ?? '')"
      />
--}}

@props([
    'searchPlaceholder' => 'Search by ID or type...',
    'types'             => ['All Types', 'Transcript', 'Leave of Absence', 'Enrollment Cert', 'Grade Appeal'],
    'statuses'          => ['All Statuses', 'Approved', 'Pending', 'In Review', 'Rejected'],
    'searchValue'       => '',
    'selectedType'      => '',
    'selectedStatus'    => '',
])

<section class="px-6 mb-6">
    <div class="bg-surface-container-low rounded-2xl p-4 flex flex-col md:flex-row gap-4">

        {{-- Search Input --}}
        <div class="relative flex-1">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
                  aria-hidden="true">search</span>

            <input
                type="text"
                name="search"
                value="{{ $searchValue }}"
                placeholder="{{ $searchPlaceholder }}"
                class="w-full pl-12 pr-4 py-3 bg-surface-container-lowest rounded-xl border-none
                       focus:ring-2 focus:ring-secondary/20 font-inter text-sm
                       placeholder:text-outline transition-all"
                aria-label="Search requests"
            />
        </div>

        {{-- Filter Controls --}}
        <div class="flex gap-4">

            {{-- Request Type Filter --}}
            <div class="relative min-w-[160px]">
                <select
                    name="type"
                    class="w-full pl-4 pr-10 py-3 bg-surface-container-lowest rounded-xl border-none
                           appearance-none focus:ring-2 focus:ring-secondary/20 font-inter text-sm
                           text-on-surface-variant cursor-pointer"
                    aria-label="Filter by request type"
                >
                    @foreach ($types as $type)
                        <option
                            value="{{ $loop->first ? '' : $type }}"
                            {{ (!$loop->first && $selectedType === $type) ? 'selected' : '' }}
                        >
                            {{ $type }}
                        </option>
                    @endforeach
                </select>

                <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2
                             pointer-events-none text-outline"
                      aria-hidden="true">expand_more</span>
            </div>

            {{-- Status Filter --}}
            <div class="relative min-w-[160px]">
                <select
                    name="status"
                    class="w-full pl-4 pr-10 py-3 bg-surface-container-lowest rounded-xl border-none
                           appearance-none focus:ring-2 focus:ring-secondary/20 font-inter text-sm
                           text-on-surface-variant cursor-pointer"
                    aria-label="Filter by status"
                >
                    @foreach ($statuses as $status)
                        <option
                            value="{{ $loop->first ? '' : $status }}"
                            {{ (!$loop->first && $selectedStatus === $status) ? 'selected' : '' }}
                        >
                            {{ $status }}
                        </option>
                    @endforeach
                </select>

                <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2
                             pointer-events-none text-outline"
                      aria-hidden="true">filter_list</span>
            </div>

        </div>
    </div>
</section>