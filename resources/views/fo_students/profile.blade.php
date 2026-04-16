<x-client.admin-layout title="My Profile" activeRoute="profile">

    <!-- Page Header -->
    <x-client.admin-header 
        title="My Profile"
        description="Manage your account information and preferences"
        :breadcrumb="[
            ['label' => 'Student Portal', 'url' => route('profile.show')],
            ['label' => 'My Profile']
        ]"
    />

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile Sidebar -->
        <div class="lg:col-span-1">
            <!-- Profile Card -->
            <x-client.admin-section>
                <div class="text-center">
                    <div class="mb-4 flex justify-center">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvzTLW7XVKdQDbl9Zial6-tbHxYohgUxvgOC8MGTGQD5zajxXQNGNTxEkNJS1kZ9BUTqXVUFNFsXVhtL6oFoUX50gyVmLPsan4zxGaihb9rgZ1fqqdtjBPZeiyvD4-U-CXoVxz0fNSayiAicw4B-EYdapiIqgETVjX9aiCeohQwBxoWd_ghUIgB-CdlbrZaf_XyIK6BZtSRkIqrlwD71p6Djt9gAh7J_IDKkUSn1tkI4CU0-_7pS4StIFhT6cR8vB4AIsxWxizVBs" alt="Profile" class="w-24 h-24 rounded-full object-cover ring-4 ring-primary/10" />
                    </div>
                    <h2 class="text-xl font-headline font-bold text-primary mb-1">{{ auth()->user()->name ?? 'Student' }}</h2>
                    <p class="text-sm text-on-surface-variant font-body mb-4">{{ auth()->user()->email ?? 'student@university.edu' }}</p>
                    <p class="text-xs font-headline font-bold text-secondary-container uppercase tracking-wider">Active Student</p>
                </div>
                <div class="mt-6 pt-6 border-t border-outline-variant/20">
                    <x-client.admin-button variant="tonal" icon="photo_camera" class="w-full justify-center">
                        Edit Profile Picture
                    </x-client.admin-button>
                </div>
            </x-client.admin-section>
        </div>

        <!-- Profile Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Personal Information -->
            <x-client.admin-section title="Personal Information" description="Your basic personal details">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">First Name</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->first_name ?? 'Julian' }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Last Name</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->last_name ?? 'Garcia' }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Email Address</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->email ?? 'julian.garcia@university.edu' }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Phone Number</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->phone ?? '+1 (555) 123-4567' }}</p>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-outline-variant/20">
                    <x-client.admin-button variant="tonal" icon="edit" href="#" size="sm">
                        Edit Information
                    </x-client.admin-button>
                </div>
            </x-client.admin-section>

            <!-- Academic Information -->
            <x-client.admin-section title="Academic Information" description="Your program and enrollment details">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Student ID</label>
                        <p class="text-on-surface font-body font-mono">STU-2024-0847</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Program</label>
                        <p class="text-on-surface font-body">Master of Science - Computer Science</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Current GPA</label>
                        <p class="text-on-surface font-body font-bold text-primary">3.85 / 4.0</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Enrollment Date</label>
                        <p class="text-on-surface font-body">September 2022</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Expected Graduation</label>
                        <p class="text-on-surface font-body">May 2024</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Academic Standing</label>
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">Good Standing</span>
                    </div>
                </div>
            </x-client.admin-section>

            <!-- Contact Information -->
            <x-client.admin-section title="Contact Information" description="Address and emergency contact details">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Mailing Address</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->address ?? '123 University Ave, City, State 12345' }}</p>
                    </div>
                    <div>
                        <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2">Emergency Contact</label>
                        <p class="text-on-surface font-body">{{ auth()->user()->emergency_contact ?? 'Maria Garcia • +1 (555) 987-6543' }}</p>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-outline-variant/20">
                    <x-client.admin-button variant="tonal" icon="edit" href="#" size="sm">
                        Edit Contact Info
                    </x-client.admin-button>
                </div>
            </x-client.admin-section>

            <!-- Account Actions -->
            <x-client.admin-section title="Account Settings" description="Manage your account and privacy">
                <div class="space-y-3 flex flex-col">
                    <x-client.admin-button variant="outlined" icon="file_download" href="#" class="justify-start">
                        Download My Data
                    </x-client.admin-button>
                    <x-client.admin-button variant="outlined" icon="delete_outline" href="#" class="justify-start text-error hover:text-error">
                        Deactivate Account
                    </x-client.admin-button>
                </div>
            </x-client.admin-section>
        </div>
    </div>

</x-client.admin-layout>
