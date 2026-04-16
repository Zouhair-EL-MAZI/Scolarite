<x-client.admin-layout title="Submit Request | Academic Curator" activeRoute="requests">
    <!-- Page Header -->
    <x-client.admin-header 
        title="Submit New Request"
        description="Complete the sections below to initiate your formal academic or administrative request."
        :breadcrumb="[
            ['label' => 'My Requests', 'url' => route('requests.index')],
            ['label' => 'New Request']
        ]"
    />

    <div class="max-w-4xl mx-auto">
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
            <x-client.admin-section title="Select Request Type" description="Choose what type of request you want to submit">
                <x-client.form-type-selection 
                    :types="$types"
                    :selectedType="old('type')"
                />
            </x-client.admin-section>

            <!-- Request Specifications -->
            <x-client.admin-section title="Request Details" description="Provide specific information about your request">
                <x-client.form-specifications />
            </x-client.admin-section>

            <!-- Additional Comments -->
            <x-client.admin-section title="Additional Comments" description="Add any extra information or context">
                <x-client.form-comments />
            </x-client.admin-section>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-4 pt-6">
                <x-client.admin-button variant="outlined" href="{{ route('requests.index') }}">
                    Cancel
                </x-client.admin-button>
                <x-client.admin-button variant="primary" icon="send" type="submit">
                    Confirm Submission
                </x-client.admin-button>
            </div>
        </form>
    </div>
</x-client.admin-layout>