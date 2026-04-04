<x-form-layout title="Submit Request | Academic Curator">
    <!-- Page Header -->
    <x-form-header 
        title="Submit New Request"
        subtitle="Initiate administrative requests through our secure curatorial system."
        breadcrumb="Academic Records & Support"
    />

    <!-- Form Section -->
    <section class="bg-surface-container-lowest rounded-2xl p-10 shadow-sm border border-slate-100">
        <form class="space-y-10" action="{{ route('requests.store') }}" method="POST">
            @csrf
            <!-- Step 1: Category -->
            <x-form-section :step="1" title="Select Request Category">
                <x-form-field 
                    type="select" 
                    name="type" 
                    placeholder="Choose a request type..."
                    required
                >
                    <option value="Student card replacement">Student card replacement</option>
                    <option value="Official Transcript (Digital/Physical)">Official Transcript (Digital/Physical)</option>
                    <option value="Enrollment Certificate">Enrollment Certificate</option>
                    <option value="Internship Authorization">Internship Authorization</option>
                    <option value="Re-enrollment for Academic Year">Re-enrollment for Academic Year</option>
                    <option value="Personal Information Correction">Personal Information Correction</option>
                </x-form-field>
            </x-form-section>

            <!-- Step 2: Details -->
            <x-form-section :step="2" title="Request Specifications">
                <x-form-field 
                    type="textarea" 
                    label="Detailed Description" 
                    name="comment"
                    placeholder="Clearly describe what you need..."
                    :rows="5"
                    required
                />
                {{-- <x-form-field 
                    type="text" 
                    label="Reason for Request" 
                    name="reason" 
                    placeholder="e.g., Lost card, Graduate application"
                    required
                /> --}}
            </x-form-section>

            <!-- Step 3: Attachments -->
            {{-- <x-form-section :step="3" title="Supporting Documentation">
                <x-file-upload name="attachments" maxSize="10MB" acceptedFormats="PDF, JPG, PNG" />
            </x-form-section> --}}

            <!-- Actions -->
            {{-- <x-form-actions 
                submitText="Confirm Submission"
                cancelText="Cancel" 
                cancelUrl="#"
            /> --}}

            <div class="flex items-center justify-end gap-4 pt-6">
                <a  href="{{ route('requests.index') }}"  class="bg-surface-container-high text-on-surface px-8 py-4 rounded-xl font-bold text-sm tracking-tight hover:bg-surface-variant transition-all">
                    Cancel
                </a>
                <button class="bg-primary text-blue px-10 py-4 rounded-xl font-bold text-sm tracking-tight shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all" type="submit">
                    Confirm Submission
                </button>
            </div>

        </form>
    </section>
</x-form-layout>