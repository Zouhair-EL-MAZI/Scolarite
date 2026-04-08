<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Academic Curator - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['DM Serif Display', 'serif'],
                    },
                    colors: {
                        primary: {
                            50:  '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#1e1b4b',
                        },
                        navy: {
                            800: '#1e2a45',
                            900: '#151e30',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #f4f6fb; }
        .sidebar-link.active { background: #eef2ff; color: #4338ca; font-weight: 600; }
        .sidebar-link.active svg { color: #4338ca; }
        .progress-bar { transition: width 0.8s ease; }
        .card-hover { transition: box-shadow 0.2s, transform 0.2s; }
        .card-hover:hover { box-shadow: 0 8px 32px rgba(99,102,241,0.10); transform: translateY(-2px); }
        .badge-pulse { animation: pulse 2s infinite; }
        @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.6} }
    </style>
</head>
<body class="min-h-screen">

{{-- ========== SIDEBAR ========== --}}
<aside class="fixed top-0 left-0 h-full w-56 bg-white border-r border-gray-100 flex flex-col z-30">
    {{-- Brand --}}
    <div class="flex items-center gap-3 px-5 py-6 border-b border-gray-100">
        <div class="w-9 h-9 rounded-xl bg-navy-900 flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </div>
        <div>
            <p class="text-xs font-semibold text-gray-900 leading-tight">The Academic</p>
            <p class="text-xs text-gray-400">Curator</p>
        </div>
    </div>

    {{-- Admin Badge --}}
    <div class="flex items-center gap-3 px-5 py-4 border-b border-gray-100">
        <div class="w-9 h-9 rounded-full bg-navy-900 flex items-center justify-center">
            <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
        </div>
        <div>
            <p class="text-xs font-semibold text-gray-900">Admin Portal</p>
            <p class="text-xs text-gray-400">Central Management</p>
        </div>
    </div>

    {{-- Navigation --}}
    <nav class="flex-1 px-3 py-4 space-y-1">
        <a href="{{ route('dashboard') }}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-800">
    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    Dashboard
</a>
        @php
            $navItems = [
                ['label' => 'Overview',          'icon' => 'M3 7h18M3 12h18M3 17h18', 'active' => true],
                ['label' => 'All Requests',      'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'active' => false],
                ['label' => 'Student Directory', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0', 'active' => false],
                ['label' => 'Reports',           'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'active' => false],
                ['label' => 'System Settings',  'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'active' => false],
            ];
        @endphp

        @foreach($navItems as $item)
        <a href="#" class="sidebar-link {{ $item['active'] ? 'active' : '' }} flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-800 transition-colors">
            <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $item['icon'] }}"/></svg>
            <span>{{ $item['label'] }}</span>
        </a>
        @endforeach
    </nav>

    {{-- Bottom Actions --}}
    <div class="px-3 pb-5 space-y-1">
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary-600 text-white text-sm font-medium hover:bg-primary-700 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            New Report
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-800 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Support
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-800 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
            Log Out
        </a>
    </div>
</aside>

{{-- ========== MAIN WRAPPER ========== --}}
<div class="ml-56 min-h-screen flex flex-col">

    {{-- TOP NAV --}}
    <header class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-gray-100 flex items-center px-8 py-3 gap-4">
        <div class="flex-1 max-w-sm">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 105 11a6 6 0 0012 0z"/></svg>
                <input type="text" placeholder="Search requests..." class="w-full pl-9 pr-4 py-2 text-sm bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition">
            </div>
        </div>
        <div class="flex items-center gap-3 ml-auto">
            <button class="relative w-9 h-9 flex items-center justify-center rounded-xl bg-gray-50 hover:bg-gray-100 transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full badge-pulse"></span>
            </button>
            <button class="w-9 h-9 flex items-center justify-center rounded-xl bg-gray-50 hover:bg-gray-100 transition">
                <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </button>
            <div class="w-9 h-9 rounded-full bg-navy-900 overflow-hidden flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
        </div>
    </header>

    {{-- ========== PAGE CONTENT ========== --}}
    <main class="flex-1 p-8">

        {{-- Page Header --}}
        <div class="flex items-start justify-between mb-8">
            <div>
                <h1 class="text-2xl font-display font-bold text-gray-900">Dashboard Overview</h1>
                <p class="text-sm text-gray-500 mt-1">Welcome back, Academic Administrator. Here is your daily summary.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-xl hover:bg-gray-50 transition shadow-sm">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Export Data
                </button>
                <button class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-navy-900 rounded-xl hover:bg-navy-800 transition shadow-sm">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z"/></svg>
                    Custom Filters
                </button>
            </div>
        </div>

        {{-- ===== STAT CARDS ===== --}}
        @php
            $stats = [
                [
                    'label'    => 'Total Requests',
                    'value'    => '1,284',
                    'sub'      => 'vs 1,141 last month',
                    'badge'    => '+12.5%',
                    'badge_ok' => true,
                    'icon'     => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'dark'     => false,
                ],
                [
                    'label'    => 'Pending Review',
                    'value'    => '42',
                    'sub'      => '12 requiring urgent attention',
                    'badge'    => null,
                    'badge_ok' => false,
                    'icon'     => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                    'dark'     => true,
                ],
                [
                    'label'    => 'Approved Today',
                    'value'    => '86',
                    'sub'      => 'Daily average: 72',
                    'badge'    => null,
                    'badge_ok' => false,
                    'icon'     => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'dark'     => false,
                ],
                [
                    'label'    => 'Rejected',
                    'value'    => '14',
                    'sub'      => 'Low priority cases',
                    'badge'    => null,
                    'badge_ok' => false,
                    'icon'     => 'M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z',
                    'dark'     => false,
                ],
            ];
        @endphp

        <div class="grid grid-cols-4 gap-4 mb-6">
            @foreach($stats as $stat)
            <div class="card-hover rounded-2xl p-5 {{ $stat['dark'] ? 'bg-navy-900 text-white' : 'bg-white border border-gray-100' }}">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center {{ $stat['dark'] ? 'bg-white/10' : 'bg-primary-50' }}">
                        <svg class="w-5 h-5 {{ $stat['dark'] ? 'text-white' : 'text-primary-600' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $stat['icon'] }}"/>
                        </svg>
                    </div>
                    @if($stat['badge'])
                    <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">{{ $stat['badge'] }}</span>
                    @endif
                </div>
                <p class="text-xs {{ $stat['dark'] ? 'text-blue-200' : 'text-gray-500' }} mb-1">{{ $stat['label'] }}</p>
                <p class="text-3xl font-bold {{ $stat['dark'] ? 'text-white' : 'text-gray-900' }} font-display">{{ $stat['value'] }}</p>
                <p class="text-xs {{ $stat['dark'] ? 'text-blue-300' : 'text-gray-400' }} mt-1.5">{{ $stat['sub'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- ===== MIDDLE ROW ===== --}}
        <div class="grid grid-cols-3 gap-4 mb-6">

            {{-- Request Volume --}}
            <div class="col-span-2 bg-white border border-gray-100 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-5">
                    <h2 class="font-semibold text-gray-900 text-sm">Request Volume by Type</h2>
                    <select class="text-xs text-gray-500 bg-gray-50 border border-gray-200 rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option>Last 30 Days</option>
                        <option>Last 7 Days</option>
                        <option>Last 90 Days</option>
                    </select>
                </div>

                @php
                    $types = [
                        ['label' => 'Official Transcripts',   'pct' => 45, 'color' => 'bg-navy-900'],
                        ['label' => 'Student ID Cards',       'pct' => 30, 'color' => 'bg-primary-500'],
                        ['label' => 'Enrollment Verification','pct' => 15, 'color' => 'bg-gray-300'],
                        ['label' => 'Other Documents',        'pct' => 10, 'color' => 'bg-gray-200'],
                    ];
                @endphp

                <div class="space-y-4">
                    @foreach($types as $t)
                    <div>
                        <div class="flex justify-between text-xs mb-1.5">
                            <span class="text-gray-700 font-medium">{{ $t['label'] }}</span>
                            <span class="text-gray-500 font-semibold">{{ $t['pct'] }}%</span>
                        </div>
                        <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full {{ $t['color'] }} rounded-full progress-bar" style="width: {{ $t['pct'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 gap-3 mt-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wide mb-1">Peak Time</p>
                        <p class="text-sm font-bold text-gray-900">Tuesdays, 10 AM</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4">
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wide mb-1">Avg Processing</p>
                        <p class="text-sm font-bold text-gray-900">1.4 Days</p>
                    </div>
                </div>
            </div>

            {{-- Recent Activity --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-6 flex flex-col">
                <div class="flex items-center justify-between mb-5">
                    <h2 class="font-semibold text-gray-900 text-sm">Recent Activity</h2>
                    <a href="#" class="text-xs text-primary-600 font-medium hover:underline">View All</a>
                </div>

                @php
                    $activity = [
                        ['name' => 'Alex Thompson', 'action' => 'Submitted: Academic Transcript',  'time' => '2 min ago',  'online' => true],
                        ['name' => 'Maria Garcia',  'action' => 'Submitted: ID Card Renewal',      'time' => '14 min ago', 'online' => false],
                        ['name' => 'James Wilson',  'action' => 'Resubmitted: Missing Signature',  'time' => '45 min ago', 'online' => false],
                        ['name' => 'Sarah Chen',    'action' => 'Submitted: Graduation Certificate','time' => '1 hour ago', 'online' => true],
                    ];
                @endphp

                <div class="space-y-4 flex-1">
                    @foreach($activity as $a)
                    <div class="flex gap-3 items-start">
                        <div class="relative shrink-0 mt-0.5">
                            <div class="w-8 h-8 rounded-full bg-primary-50 flex items-center justify-center">
                                <span class="text-xs font-bold text-primary-600">{{ substr($a['name'], 0, 1) }}</span>
                            </div>
                            @if($a['online'])
                            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-400 border-2 border-white rounded-full"></span>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs font-semibold text-gray-900">{{ $a['name'] }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ $a['action'] }}</p>
                            <span class="inline-block mt-1 text-[10px] text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full uppercase tracking-wide">{{ $a['time'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Maintenance Notice --}}
                <div class="mt-4 bg-amber-50 border border-amber-100 rounded-xl p-4">
                    <div class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-amber-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <div>
                            <p class="text-xs font-semibold text-amber-800">System Maintenance</p>
                            <p class="text-xs text-amber-600 mt-0.5">The portal will be undergoing scheduled maintenance this Sunday at 2:00 AM EST.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===== QUICK ACTIONS ===== --}}
        <div>
            <h2 class="text-sm font-semibold text-gray-900 mb-4">Quick Actions</h2>
            @php
                $actions = [
                    ['label' => 'Add Student',  'icon' => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z'],
                    ['label' => 'Bulk Upload',  'icon' => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'],
                    ['label' => 'Notify All',   'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['label' => 'Archived',     'icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4'],
                ];
            @endphp
            <div class="grid grid-cols-4 gap-4">
                @foreach($actions as $action)
                <button class="card-hover bg-white border border-gray-100 rounded-2xl p-5 flex flex-col items-center gap-3 group">
                    <div class="w-12 h-12 rounded-xl bg-gray-50 group-hover:bg-primary-50 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-500 group-hover:text-primary-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $action['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-gray-600 group-hover:text-gray-900 uppercase tracking-wide transition-colors">{{ $action['label'] }}</span>
                </button>
               
                @endforeach
            </div>
        </div>

    </main>
</div>

</body>
</html> -->