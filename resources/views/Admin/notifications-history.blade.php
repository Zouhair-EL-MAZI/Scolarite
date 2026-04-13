<x-admin.layout>
        <x-admin.navbar />
        <x-admin.sidebar />

        <main class="ml-64 pt-24 px-8 pb-12">
                <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col gap-4 mb-8">
                                <div>
                                        <span
                                                class="text-xs uppercase tracking-[0.3em] text-slate-500">{{ __('admin.notification_history') }}</span>
                                        <h1 class="mt-2 text-3xl font-bold text-blue-950 dark:text-white">
                                                {{ __('admin.sent_notifications_title') }}</h1>
                                        <p class="mt-3 max-w-2xl text-sm text-slate-500">
                                                {{ __('admin.sent_notifications_summary') }}</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                        <a href="{{ route('admin.dashboard') }}"
                                                class="rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50">{{ __('admin.back_to_dashboard') }}</a>
                                        <a href="{{ route('admin.notifications.create') }}"
                                                class="rounded-full bg-blue-950 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-900">{{ __('admin.send_announcement') }}</a>
                                </div>
                        </div>

                        <div
                                class="rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                                <div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800">
                                        <h2 class="text-lg font-semibold text-blue-950 dark:text-white">
                                                {{ __('admin.notification_list_title') }}</h2>
                                </div>
                                <div class="p-6 overflow-x-auto">
                                        @if($notifications->isEmpty())
                                                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-slate-600">
                                                        {{ __('admin.no_notifications_sent') }}
                                                </div>
                                        @else
                                                <table class="min-w-full text-left text-sm text-slate-700 dark:text-slate-300">
                                                        <thead>
                                                                <tr
                                                                        class="border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 text-slate-500 uppercase tracking-[0.2em] text-xs">
                                                                        <th class="px-4 py-3">{{ __('admin.date') }}</th>
                                                                        <th class="px-4 py-3">{{ __('admin.student') }}</th>
                                                                        <th class="px-4 py-3">{{ __('admin.email') }}</th>
                                                                        <th class="px-4 py-3">{{ __('admin.subject_label') }}
                                                                        </th>
                                                                        <th class="px-4 py-3">{{ __('admin.message_label') }}
                                                                        </th>
                                                                </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                                                @foreach($notifications as $notification)
                                                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                                                                <td
                                                                                        class="px-4 py-4 font-medium text-slate-900 dark:text-white">
                                                                                        {{ $notification->created_at->format('Y-m-d H:i') }}
                                                                                </td>
                                                                                <td class="px-4 py-4">
                                                                                        {{ optional($notification->notifiable)->first_name ? optional($notification->notifiable)->first_name . ' ' . optional($notification->notifiable)->last_name : __('admin.deleted_student') }}
                                                                                </td>
                                                                                <td class="px-4 py-4">
                                                                                        {{ optional($notification->notifiable)->email ?? '—' }}
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-4 font-semibold text-slate-900 dark:text-white">
                                                                                        {{ $notification->data['subject'] ?? '—' }}
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-4 text-slate-600 dark:text-slate-300">
                                                                                        {{ $notification->data['message'] ?? '—' }}
                                                                                </td>
                                                                        </tr>
                                                                @endforeach
                                                        </tbody>
                                                </table>
                                        @endif
                                </div>
                                <div
                                        class="border-t border-slate-200 dark:border-slate-800 px-6 py-4 bg-slate-50 dark:bg-slate-900">
                                        {{ $notifications->links() }}
                                </div>
                        </div>
                </div>
        </main>
</x-admin.layout>