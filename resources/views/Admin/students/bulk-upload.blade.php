<x-admin.layout>
        <x-admin.navbar />
        <x-admin.sidebar />

        <main class="ml-64 pt-24 px-8 pb-12">
                <div class="max-w-4xl mx-auto space-y-6">
                        <div
                                class="rounded-3xl bg-white dark:bg-slate-950 p-8 shadow-sm border border-slate-200 dark:border-slate-800">
                                <div class="flex flex-col gap-2">
                                        <span class="text-xs uppercase tracking-[0.3em] text-slate-500">Téléversement en
                                                masse</span>
                                        <h1 class="text-3xl font-bold text-blue-950 dark:text-white">Importer des
                                                étudiants</h1>
                                        <p class="text-sm text-slate-500">Téléversez un fichier CSV contenant les
                                                informations des étudiants pour ajouter plusieurs comptes à la fois.</p>
                                </div>
                        </div>

                        @if(session('success'))
                                <div class="rounded-3xl bg-emerald-50 border border-emerald-200 p-5 text-emerald-900">
                                        {{ session('success') }}
                                </div>
                        @endif

                        @if($errors->any())
                                <div class="rounded-3xl bg-rose-50 border border-rose-200 p-5 text-rose-900">
                                        <ul class="list-disc pl-5 space-y-1 text-sm">
                                                @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                @endforeach
                                        </ul>
                                </div>
                        @endif

                        @if(session('errors_list'))
                                <div class="rounded-3xl bg-amber-50 border border-amber-200 p-5 text-amber-900">
                                        <p class="font-semibold mb-2">Lignes ignorées :</p>
                                        <ul class="list-disc pl-5 space-y-1 text-sm">
                                                @foreach(session('errors_list') as $error)
                                                        <li>{{ $error }}</li>
                                                @endforeach
                                        </ul>
                                </div>
                        @endif

                        <div
                                class="rounded-3xl bg-white dark:bg-slate-950 p-8 shadow-sm border border-slate-200 dark:border-slate-800">
                                <form method="POST" action="{{ route('admin.students.bulkUpload.store') }}"
                                        enctype="multipart/form-data" class="space-y-6">
                                        @csrf
                                        <div class="space-y-2">
                                                <label
                                                        class="block text-sm font-medium text-slate-700 dark:text-slate-300">Fichier
                                                        CSV</label>
                                                <input type="file" name="file" accept=".csv"
                                                        class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 focus:border-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-900/10" />
                                                <p class="text-xs text-slate-500">Le fichier doit contenir les colonnes
                                                        : first_name, last_name, email, apogee_number, cne,
                                                        date_of_birth, department, status.</p>
                                        </div>
                                        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4">
                                                <a href="{{ route('admin.dashboard') }}"
                                                        class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-slate-100 px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-200">Retour
                                                        au tableau de bord</a>
                                                <button type="submit"
                                                        class="inline-flex items-center justify-center rounded-full bg-blue-950 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-900">Importer</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </main>
</x-admin.layout>