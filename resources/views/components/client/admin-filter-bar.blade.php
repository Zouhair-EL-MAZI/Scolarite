@props([
    'searchPlaceholder' => 'Search requests...',
    'submitLabel' => 'Search',
    'action' => '',
    'filters' => []
])

<form method="GET" action="{{ $action }}" class="grid grid-cols-12 gap-4 mb-8">

    <!-- Search Input -->
    <div class="col-span-12 md:col-span-5 bg-surface-container-low rounded-2xl flex items-center px-4 border border-outline-variant/20">
        <span class="material-symbols-outlined text-on-surface-variant">search</span>
        <input 
            name="search" 
            class="bg-transparent border-none focus:ring-0 w-full text-sm font-medium text-on-surface placeholder-on-surface-variant"
            placeholder="{{ $searchPlaceholder }}" 
            type="text" 
            value="{{ request('search') }}"
        />
    </div>

    <!-- Filters -->
    @if(count($filters) > 0)
        @foreach($filters as $filter)
            <div class="col-span-6 md:col-span-3 bg-surface-container-low rounded-2xl flex items-center px-4 border border-outline-variant/20">
                <span class="material-symbols-outlined text-on-surface-variant mr-2 text-sm">
                    {{ $filter['icon'] ?? 'filter_list' }}
                </span>

                <select 
                    name="{{ $filter['name'] }}"
                    onchange="this.form.submit()"
                    class="bg-transparent border-none focus:ring-0 w-full text-sm font-medium appearance-none text-on-surface"
                >
                    <option value="">{{ $filter['placeholder'] }}</option>

                    @foreach ($filter['options'] as $value => $label)
                        <option 
                            value="{{ $value }}"
                            @selected(request($filter['name']) == $value)
                        >
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
        @endforeach
    @endif

    <!-- Submit Button -->
    <div class="col-span-12 md:col-span-2">
        <button 
            type="submit"
            class="w-full h-full bg-primary text-white rounded-2xl text-sm font-medium hover:opacity-90 transition"
        >
            {{ $submitLabel }}
        </button>
    </div>

    <!-- Extra Actions -->
    {{ $slot }}

</form>
