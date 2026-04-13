<x-admin.layout>
        <x-admin.navbar />
        <x-admin.sidebar />

        <main class="ml-64 pt-24 px-8 pb-12">
                <div class="max-w-4xl mx-auto">
                        <div
                                class="rounded-3xl bg-white dark:bg-slate-950 p-8 shadow-sm border border-slate-200 dark:border-slate-800">
                                <div class="flex flex-col gap-4 mb-8">
                                        <div>
                                                <span
                                                        class="text-xs uppercase tracking-[0.3em] text-slate-500">{{ __('admin.notify_all') }}</span>
                                                <h1 class="mt-2 text-3xl font-bold text-blue-950 dark:text-white">
                                                        {{ __('admin.send_announcement') }}
                                                </h1>
                                                <p class="mt-3 text-sm text-slate-500">{{ __('admin.write_message') }}
                                                </p>
                                        </div>
                                        <div class="flex flex-wrap gap-3">
                                                <a href="{{ route('admin.dashboard') }}"
                                                        class="w-fit rounded-full border border-slate-200 bg-slate-50 px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100">{{ __('admin.back_to_dashboard') }}</a>
                                                <a href="{{ route('admin.notifications.history') }}"
                                                        class="w-fit rounded-full bg-blue-950 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-900">{{ __('admin.view_history') }}</a>
                                        </div>

                                        @if(session('success'))
                                                <div
                                                        class="mb-6 rounded-3xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800">
                                                        {{ session('success') }}
                                                </div>
                                        @endif
                                        @if(session('error'))
                                                <div
                                                        class="mb-6 rounded-3xl border border-rose-200 bg-rose-50 p-4 text-sm text-rose-800">
                                                        {{ session('error') }}
                                                </div>
                                        @endif

                                        <form action="{{ route('admin.notifications.send') }}" method="POST"
                                                class="space-y-6">
                                                @csrf

                                                <div>
                                                        <label for="subject"
                                                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300">{{ __('admin.subject') }}</label>
                                                        <input id="subject" name="subject" type="text"
                                                                value="{{ old('subject') }}" required
                                                                class="mt-3 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20" />
                                                        @error('subject')
                                                                <p class="mt-2 text-sm text-rose-600">{{ $message }}</p>
                                                        @enderror
                                                </div>

                                                <div>
                                                        <label for="message"
                                                                class="block text-sm font-semibold text-slate-700 dark:text-slate-300">{{ __('admin.message') }}</label>
                                                        <textarea id="message" name="message" rows="6" required
                                                                class="mt-3 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-600/20">{{ old('message') }}</textarea>
                                                        @error('message')
                                                                <p class="mt-2 text-sm text-rose-600">{{ $message }}</p>
                                                        @enderror
                                                </div>

                                                <div
                                                        class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                                        <p class="text-sm text-slate-500">
                                                                {{ __('admin.all_students_receive_message') }}</p>
                                                        <button type="submit"
                                                                class="rounded-full bg-blue-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">{{ __('admin.send') }}</button>
                                                </div>
                                        </form>
                                </div>
                        </div>
        </main>
</x-admin.layout>