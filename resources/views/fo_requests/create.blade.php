<x-client.app-layout title="Submit Request | Academic Curator" activeRoute="requests">


    <main class="lg:ml-64 min-h-screen pb-24 lg:pb-8">
        <div class="max-w-4xl mx-auto px-6 py-8">
            <!-- Breadcrumb -->
            <nav class="mb-6">
                <ol class="flex items-center gap-2 text-sm font-medium text-slate-500">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('requests.index') }}">Requests</a></li>
                    <li><span class="material-symbols-outlined text-xs">chevron_right</span></li>
                    <li class="text-primary font-semibold">New Request</li>
                </ol>
            </nav>

            <!-- Page Title -->
            <div class="mb-10">
                <h1 class="text-4xl font-headline font-extrabold text-primary tracking-tight mb-2">Submit New Request</h1>
                <p class="text-on-surface-variant font-body">Complete the sections below to initiate your formal academic or administrative request.</p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-8 p-4 bg-error-container border border-error rounded-lg">
                    <p class="text-error font-semibold mb-2">Please correct the following errors:</p>
                    <ul class="text-error text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Request Form -->
            <form class="space-y-8" action="{{ route('requests.store') }}" method="POST">
                @csrf

                <!-- Progress Stepper -->
                <x-client.progress-stepper 
                    :steps="3"
                    :currentStep="1"
                    :stepLabels="['Type', 'Details', 'Comments']"
                />

                <!-- Request Type Selection -->
                <x-client.form-type-selection 
                    :types="$types"
                    :selectedType="old('type')"
                />

                <!-- Request Specifications -->
                <x-client.form-specifications />

                <!-- Additional Comments -->
                <x-client.form-comments />

                <!-- Form Actions -->
                <div class="flex items-center justify-end gap-4 pt-6">
                    <a href="{{ route('requests.index') }}" class="px-8 py-3 rounded-lg text-primary font-headline font-bold hover:bg-primary/5 transition-all">
                        Cancel
                    </a>
                    <button type="submit" class="px-10 py-3 rounded-lg bg-primary text-on-primary font-headline font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2">
                        Confirm Submission
                        <span class="material-symbols-outlined text-base">send</span>
                    </button>
                </div>
            </form>
        </div>
    </main>

    <x-client.bottom-nav />
</x-client.app-layout>