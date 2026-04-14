<!-- Stats Overview Cards (Asymmetric Bento Component) -->
<section class="px-6 mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="md:col-span-2 bg-primary p-8 rounded-2xl relative overflow-hidden group">
        <div class="relative z-10">
            <h3 class="text-on-primary text-xl font-bold font-manrope mb-2">Request Assistance?</h3>
            <p class="text-on-primary/70 max-w-sm mb-6">Our registrar team is available to help you with documentation queries and administrative holds during business hours.</p>
            <button class="bg-white text-primary px-5 py-2.5 rounded-lg font-bold text-sm hover:scale-105 transition-transform">Contact Support</button>
        </div>
        <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-white/5 rounded-full blur-3xl group-hover:scale-125 transition-transform duration-700"></div>
    </div>
    <div class="bg-surface-container-highest p-8 rounded-2xl flex flex-col justify-between">
        <div>
            <span class="material-symbols-outlined text-secondary text-4xl mb-4">timer</span>
            <h3 class="text-on-surface font-manrope font-bold text-lg">Avg. Processing</h3>
        </div>
        <div class="mt-4">
            <span class="text-4xl font-extrabold text-primary font-manrope">{{ $avgProcessingDays ?? '3.5' }}</span>
            <span class="text-on-surface-variant font-medium ml-1">Business Days</span>
        </div>
    </div>
</section>
