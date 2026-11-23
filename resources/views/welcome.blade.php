<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Git & Laravel - Shobhi Rizqullah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-6 font-sans">
    <div class="max-w-2xl w-full bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
        <div class="flex items-center justify-between mb-6">
            <span class="px-3 py-1 text-xs font-semibold tracking-wide uppercase bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 rounded-full">
                ● Live on Wasmer Cloud
            </span>
            <span class="text-xs text-slate-400">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</span>
        </div>

        <h1 class="text-3xl font-bold text-white mb-2">
            Praktikum Pemrograman Web
        </h1>
        <p class="text-slate-400 mb-6">
            Implementasi Version Control (Git &amp; GitHub) serta Deployment Aplikasi Laravel 12 ke Cloud Hosting.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-950/60 border border-slate-800/80 rounded-xl p-5 mb-6 text-sm">
            <div>
                <p class="text-slate-500 text-xs uppercase">Nama Mahasiswa</p>
                <p class="font-semibold text-slate-200 mt-0.5">Shobhi Rizqullah</p>
            </div>
            <div>
                <p class="text-slate-500 text-xs uppercase">NIM</p>
                <p class="font-semibold text-slate-200 mt-0.5">J0404251029</p>
            </div>
            <div>
                <p class="text-slate-500 text-xs uppercase">Program Studi</p>
                <p class="font-semibold text-slate-200 mt-0.5">Teknologi Rekayasa Komputer</p>
            </div>
            <div>
                <p class="text-slate-500 text-xs uppercase">Repository</p>
                <p class="font-semibold text-indigo-400 mt-0.5">soobrayy/laravel-laravel-praktikum13</p>
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-slate-800 text-xs text-slate-400">
            <span>Status Environment: <strong class="text-slate-200">{{ app()->environment() }}</strong></span>
            <a href="https://github.com/soobrayy/laravel-laravel-praktikum13" target="_blank"
               class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-lg transition">
                Lihat Repository GitHub &rarr;
            </a>
        </div>
    </div>
</body>
</html>