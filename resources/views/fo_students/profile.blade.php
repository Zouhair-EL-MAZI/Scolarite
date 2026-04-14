<x-client.app-layout title="My Profile" activeRoute="profile">

    <main class="center lg:ml-64 min-h-screen pb-24 lg:pb-8 bg-surface">
        <!-- Page Header -->
        <section class="px-6 py-8 border-b border-outline-variant/20">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-headline font-extrabold tracking-tight text-primary">My Profile</h1>
                <p class="text-on-surface-variant font-body mt-2">Manage your account information and preferences</p>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Profile Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Profile Card -->
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                        <div class="p-6 text-center">
                            <div class="mb-4 flex justify-center">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvzTLW7XVKdQDbl9Zial6-tbHxYohgUxvgOC8MGTGQD5zajxXQNGNTxEkNJS1kZ9BUTqXVUFNFsXVhtL6oFoUX50gyVmLPsan4zxGaihb9rgZ1fqqdtjBPZeiyvD4-U-CXoVxz0fNSayiAicw4B-EYdapiIqgETVjX9aiCeohQwBxoWd_ghUIgB-CdlbrZaf_XyIK6BZtSRkIqrlwD71p6Djt9gAh7J_IDKkUSn1tkI4CU0-_7pS4StIFhT6cR8vB4AIsxWxizVBs" alt="Profile" class="w-24 h-24 rounded-full object-cover ring-4 ring-primary/10" />
                            </div>
                            <h2 class="text-xl font-headline font-bold text-primary mb-1">{{ auth()->user()->name ?? 'Student' }}</h2>
                            <p class="text-sm text-on-surface-variant font-body mb-4">{{ auth()->user()->email ?? 'student@university.edu' }}</p>
                            <p class="text-xs font-headline font-bold text-secondary-container uppercase tracking-wider">Active Student</p>
                        </div>
                        <div class="px-6 py-4 bg-surface-container-high/40 border-t border-outline-variant/20">
                            <button class="w-full text-center text-primary font-headline font-bold hover:text-primary/80 transition-colors py-2">
                                Edit Profile Picture
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Personal Information -->
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                        <div class="px-6 py-4 bg-primary/5 border-b border-outline-variant/20 flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">person_info</span>
                            <h3 class="text-lg font-headline font-bold text-primary">Personal Information</h3>
                        </div>
                        <div class="p-6 space-y-6">
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
                            <a href="#" class="inline-flex items-center gap-2 text-primary hover:text-primary/80 font-headline font-bold transition-colors">
                                <span class="material-symbols-outlined text-sm">edit</span>
                                Edit Information
                            </a>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                        <div class="px-6 py-4 bg-secondary/5 border-b border-outline-variant/20 flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary">school</span>
                            <h3 class="text-lg font-headline font-bold text-primary">Academic Information</h3>
                        </div>
                        <div class="p-6 space-y-6">
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
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                        <div class="px-6 py-4 bg-tertiary/5 border-b border-outline-variant/20 flex items-center gap-3">
                            <span class="material-symbols-outlined text-tertiary">contacts</span>
                            <h3 class="text-lg font-headline font-bold text-primary">Contact Information</h3>
                        </div>
                        <div class="p-6 space-y-6">
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
                            <a href="#" class="inline-flex items-center gap-2 text-primary hover:text-primary/80 font-headline font-bold transition-colors">
                                <span class="material-symbols-outlined text-sm">edit</span>
                                Edit Contact Info
                            </a>
                        </div>
                    </div>

                    <!-- Account Actions -->
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 p-6">
                        <h3 class="text-lg font-headline font-bold text-primary mb-4 flex items-center gap-3">
                            <span class="material-symbols-outlined">settings</span>
                            Account Settings
                        </h3>
                        <div class="space-y-3 flex flex-col">
                            <button class="px-4 py-2 rounded-lg text-on-surface hover:bg-surface-container-high transition-all text-left font-body text-sm">
                                Download My Data
                            </button>
                            <button class="px-4 py-2 rounded-lg text-error hover:bg-error-container/20 transition-all text-left font-body text-sm">
                                Deactivate Account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-client.bottom-nav />
</x-client.app-layout>
