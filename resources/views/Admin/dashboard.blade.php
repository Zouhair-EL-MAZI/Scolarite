<x-admin.layout>
    <x-admin.navbar />
    <x-admin.sidebar />

    <main class="ml-64 pt-24 px-8 pb-12">

        <div class="flex flex-col gap-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <span class="text-xs uppercase tracking-[0.3em] text-slate-500">Portail Admin</span>
                    <h1 class="mt-2 text-3xl font-bold text-blue-950 dark:text-white">Tableau de bord</h1>
                    <p class="mt-3 max-w-2xl text-sm text-slate-500">Bon retour, administrateur académique. Voici votre
                        résumé quotidien et l'état des demandes en cours.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('admin.requests.index', ['export' => 1]) }}"
                        class="rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50">Exporter
                        les données</a>
                    <a href="{{ route('admin.requests.index') }}"
                        class="rounded-full bg-blue-950 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-900">Filtres
                        personnalisés</a>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-4 gap-4">
                <div
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                    <p class="text-sm text-slate-500">Demandes totales</p>
                    <p class="mt-4 text-3xl font-bold text-blue-950 dark:text-white">{{ $totalRequests }}</p>
                    <p class="mt-3 text-xs text-slate-500">Nombre total de demandes de service étudiant ce semestre.</p>
                </div>
                <div
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                    <p class="text-sm text-slate-500">En attente</p>
                    <p class="mt-4 text-3xl font-bold text-amber-600">{{ $pending }}</p>
                    <p class="mt-3 text-xs text-slate-500">Demandes en attente d'approbation.</p>
                </div>
                <div
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                    <p class="text-sm text-slate-500">Approuvées aujourd'hui</p>
                    <p class="mt-4 text-3xl font-bold text-emerald-600">{{ $approved }}</p>
                    <p class="mt-3 text-xs text-slate-500">Demandes traitées et approuvées.</p>
                </div>
                <div
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                    <p class="text-sm text-slate-500">Rejetées</p>
                    <p class="mt-4 text-3xl font-bold text-rose-600">{{ $rejected }}</p>
                    <p class="mt-3 text-xs text-slate-500">Demandes refusées nécessitant un suivi.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
                <div
                    class="xl:col-span-2 rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                    <div
                        class="flex items-center justify-between px-6 py-5 border-b border-slate-200 dark:border-slate-800">
                        <div>
                            <h2 class="text-lg font-semibold text-blue-950 dark:text-white">Volume des demandes par type</h2>
                            <p class="mt-1 text-sm text-slate-500">Principaux types de demandes sur la période.</p>
                        </div>
                        <span
                            class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">30
                            derniers jours</span>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-5">
                            @forelse($typeVolumes as $typeVolume)
                                <li>
                                    <div
                                        class="flex items-center justify-between text-sm text-slate-600 dark:text-slate-300 mb-2">
                                        <span>{{ $typeVolume['type'] }}</span>
                                        <span
                                            class="font-semibold text-slate-900 dark:text-white">{{ $typeVolume['percent'] }}%</span>
                                    </div>
                                    <div class="h-3 overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="h-full rounded-full bg-blue-950 transition-all"
                                            style="width: {{ $typeVolume['percent'] }}%"></div>
                                    </div>
                                </li>
                            @empty
                                <li class="text-sm text-slate-500">Pas encore de données de volume de demandes.</li>
                            @endforelse
                        </ul>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                            <div class="rounded-3xl bg-slate-50 dark:bg-slate-900 p-4">
                                <p class="text-xs uppercase tracking-[0.28em] text-slate-500">Heure de pointe</p>
                                <p class="mt-3 font-semibold text-slate-900 dark:text-white">Mardi, 10 h</p>
                            </div>
                            <div class="rounded-3xl bg-slate-50 dark:bg-slate-900 p-4">
                                <p class="text-xs uppercase tracking-[0.28em] text-slate-500">Traitement moyen</p>
                                <p class="mt-3 font-semibold text-slate-900 dark:text-white">1,4 jours</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                    <div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800">
                        <h2 class="text-lg font-semibold text-blue-950 dark:text-white">Activité récente</h2>
                        <p class="mt-1 text-sm text-slate-500">Derniers événements de demandes étudiantes.</p>
                    </div>
                    <div class="p-6 space-y-6">
                        @foreach($recentRequests as $req)
                            <div class="flex items-start gap-4">
                                <span class="mt-2 inline-flex h-3.5 w-3.5 rounded-full bg-blue-950"></span>
                                <div class="flex-1">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                        <p class="font-semibold text-slate-900 dark:text-white">
                                            {{ $req->student->first_name }} {{ $req->student->last_name }}</p>
                                        <span
                                            class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.24em] text-slate-600 dark:bg-slate-800 dark:text-slate-300">{{ $req->status }}</span>
                                    </div>
                                    <p class="mt-1 text-sm text-slate-500">{{ $req->type }} ·
                                        {{ $req->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                <a href="{{ route('admin.students.create') }}"
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800 text-left transition hover:-translate-y-0.5 block">
                    <div
                        class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-950 text-white shadow-sm">
                        <span class="material-symbols-outlined">person_add</span>
                    </div>
                    <p class="mt-4 font-semibold text-slate-900 dark:text-white">Ajouter un étudiant</p>
                    <p class="mt-2 text-sm text-slate-500">Créer rapidement un dossier étudiant.</p>
                </a>
                <a href="{{ route('admin.students.bulkUpload') }}"
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800 text-left transition hover:-translate-y-0.5 block">
                    <div
                        class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-200 shadow-sm">
                        <span class="material-symbols-outlined">upload_file</span>
                    </div>
                    <p class="mt-4 font-semibold text-slate-900 dark:text-white">Téléversement en masse</p>
                    <p class="mt-2 text-sm text-slate-500">Importer plusieurs dossiers en un seul flux.</p>
                </a>
                <button
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800 text-left transition hover:-translate-y-0.5">
                    <div
                        class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-200 shadow-sm">
                        <span class="material-symbols-outlined">mark_email_read</span>
                    </div>
                    <p class="mt-4 font-semibold text-slate-900 dark:text-white">Notifier tous</p>
                    <p class="mt-2 text-sm text-slate-500">Envoyer des annonces aux étudiants.</p>
                </button>
                <button
                    class="rounded-3xl bg-white dark:bg-slate-950 p-6 shadow-sm border border-slate-200 dark:border-slate-800 text-left transition hover:-translate-y-0.5">
                    <div
                        class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-200 shadow-sm">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <p class="mt-4 font-semibold text-slate-900 dark:text-white">Archivé</p>
                    <p class="mt-2 text-sm text-slate-500">Consulter les demandes et dossiers archivés.</p>
                </button>
            </div>
        </div>

    </main>
</x-admin.layout>