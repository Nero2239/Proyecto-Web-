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
            <a href="{{ route('resources.index') }}" class="font-medium hover:text-blue-200 text-sm">Ver Apuntes</a>
            <a href="{{ route('resources.create') }}" class="bg-blue-700 text-white border border-blue-500 px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-800 transition">Subir Material</a>
            
            <div class="flex items-center space-x-3 pl-4 border-l border-blue-500">
                <div class="relative">
                    <div class="w-8 h-8 rounded-full bg-blue-900 flex items-center justify-center font-bold text-xs uppercase shadow-inner text-blue-200">
                        IT
                    </div>
                    <span class="bottom-0 right-0 absolute w-2.5 h-2.5 bg-emerald-400 border-2 border-blue-600 rounded-full animate-pulse"></span>
                </div>
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-bold leading-none">Equipo Cadena Perpetua</p>
                    <p class="text-[10px] text-blue-200 font-medium mt-0.5">Portal Estudiante</p>
                </div>
            </div>
        </div>
    </div>
</nav>

    <main class="max-w-7xl mx-auto px-6 py-10">
        @yield('content')
    </main>
</body>
</html>