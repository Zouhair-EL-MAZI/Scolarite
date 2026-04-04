@props(['request'])

@php
    $statusConfig = [
        'Approved' => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'border' => 'border-green-200', 'icon' => 'verified'],
        'Pending' => ['bg' => 'bg-amber-100', 'text' => 'text-amber-700', 'border' => 'border-amber-200', 'icon' => 'pending'],
        'Rejected' => ['bg' => 'bg-red-100', 'text' => 'text-red-700', 'border' => 'border-red-200', 'icon' => 'cancel'],
        'In Review' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'border' => 'border-blue-200', 'icon' => 'schedule'],
    ];
    
    $typeConfig = [
        'Transfer' => ['bg' => 'bg-blue-50', 'icon' => 'description', 'color' => 'text-blue-700'],
        'Withdrawal' => ['bg' => 'bg-red-50', 'icon' => 'close', 'color' => 'text-red-700'],
        'Transcript' => ['bg' => 'bg-purple-50', 'icon' => 'description', 'color' => 'text-purple-700'],
        'Leave' => ['bg' => 'bg-amber-50', 'icon' => 'event_available', 'color' => 'text-amber-700'],
        'Appeal' => ['bg' => 'bg-green-50', 'icon' => 'verified', 'color' => 'text-green-700'],
    ];
    
    $status = $statusConfig[$request->status] ?? $statusConfig['Pending'];
    $type = $typeConfig[$request->type] ?? $typeConfig['Transfer'];
@endphp

<tr class="group hover:bg-surface-container-lowest transition-colors border-b border-outline-variant/5">
    <td class="px-8 py-5 font-mono text-primary font-semibold">#REQ-{{ str_pad($request->id, 4, '0', STR_PAD_LEFT) }}</td>
    <td class="px-6 py-5">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg {{ $type['bg'] }} flex items-center justify-center">
                <span class="material-symbols-outlined {{ $type['color'] }} text-lg">{{ $type['icon'] }}</span>
            </div>
            <span class="font-medium">{{ $request->type }}</span>
        </div>
    </td>
    <td class="px-6 py-5 text-secondary">{{ $request->created_at->format('M d, Y') }}</td>
    <td class="px-6 py-5">
        <div class="flex justify-center">
            <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider {{ $status['bg'] }} {{ $status['text'] }} border {{ $status['border'] }}">
                {{ $request->status }}
            </span>
        </div>
    </td>
    <td class="px-8 py-5 text-right">
        <button class="text-primary hover:bg-primary-fixed p-2 rounded-lg transition-all active:scale-95">
            <span class="material-symbols-outlined">visibility</span>
        </button>
    </td>
</tr>
