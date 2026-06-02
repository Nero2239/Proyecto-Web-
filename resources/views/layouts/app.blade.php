<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyCloud - Repositorio Académico</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-50 text-slate-800">
<nav class="bg-blue-600 text-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold tracking-tight">☁️ StudyCloud</a>
        
        <div class="flex items-center space-x-6">
            <a href="{{ route('resources.index') }}" class="font-medium hover:text-blue-200 text-sm">Ver Apuntes</a>
            <a href="{{ route('resources.create') }}" class="bg-blue-700 text-white border border-blue-500 px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-800 transition">Subir Material</a>
            
            <div class="text-right pl-4 border-l border-blue-500 text-sm">
    <p class="text-xs text-blue-200">Conectado como:</p>
    <p class="font-bold tracking-wide text-white">{{ \App\Models\User::first()->email ?? 'admin@studycloud.com' }}</p>
</div>
        </div>
    </div>
</nav>

    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>
</body>
</html>