<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyCloud - Repositorio Académico</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-blue-600 text-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/dashboard" class="text-2xl font-bold tracking-tight">☁️ StudyCloud</a>
            <div class="flex items-center space-x-6">
                <a href="{{ route('resources.index') }}" class="font-medium hover:text-blue-200">Ver Apuntes</a>
                <a href="{{ route('resources.create') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-bold hover:bg-slate-100">Subir Material</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>
</body>
</html>