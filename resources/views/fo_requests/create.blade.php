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

        <!-- Form -->
        <form 
            x-data="{ step: {{ session('step', 1) }} }"
            class="space-y-8"
            action="{{ route('requests.store') }}" 
            method="POST"
        >
            @csrf

            <!-- Stepper -->
            <div class="flex items-center justify-between">
                <template x-for="i in 3">
                    <div class="flex-1 flex items-center gap-2">
                        <div 
                            class="w-8 h-8 flex items-center justify-center rounded-full text-sm font-semibold"
                            :class="step >= i ? 'bg-primary text-white' : 'bg-gray-200 text-gray-500'"
                        >
                            <span x-text="i"></span>
                        </div>
                        <div 
                            class="h-1 flex-1"
                            :class="step > i ? 'bg-primary' : 'bg-gray-200'"
                        ></div>
                    </div>
                </template>
            </div>

            <!-- STEP 1 -->
            <div x-show="step === 1" x-transition>
                <x-client.admin-section 
                    title="Select Request Type" 
                    description="Choose what type of request you want to submit"
                >
                    <x-client.form-type-selection 
                        :types="$types"
                        :selectedType="old('type')"
                    />
                </x-client.admin-section>
            </div>

            <!-- STEP 2 -->
            <div x-show="step === 2" x-transition>
                <x-client.admin-section 
                    title="Request Details" 
                    description="Provide specific information about your request"
                >
                    <x-client.form-specifications />
                </x-client.admin-section>
            </div>

            <!-- STEP 3 -->
            <div x-show="step === 3" x-transition>
                <x-client.admin-section 
                    title="Additional Comments" 
                    description="Add any extra information or context"
                >
                    <x-client.form-comments />
                </x-client.admin-section>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-6">

                <!-- Back -->
                <button 
                    type="button"
                    x-show="step > 1"
                    @click="step--"
                    class="px-4 py-2 border rounded-xl"
                >
                    Back
                </button>

                <div class="flex gap-4 ml-auto">

                    <!-- Next -->
                    <button 
                        type="button"
                        x-show="step < 3"
                        @click="step++"
                        class="px-4 py-2 bg-primary text-white rounded-xl"
                    >
                        Next
                    </button>

                    <!-- Submit -->
                    <x-client.admin-button 
                        x-show="step === 3"
                        variant="primary" 
                        icon="send" 
                        type="submit"
                    >
                        Confirm Submission
                    </x-client.admin-button>

                </div>
            </div>

        </form>
    </div>

</x-client.admin-layout>