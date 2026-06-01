@extends('layouts.app')

@section('content')
<div class="bg-white p-10 rounded-2xl shadow-sm border border-slate-200 text-center max-w-4xl mx-auto">
    <h1 class="text-4xl font-black text-slate-900 mb-4">¡Bienvenido a StudyCloud!</h1>
    <p class="text-slate-500 text-lg mb-8">El espacio colaborativo para consultar y compartir apuntes y proyectos.</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('resources.index') }}" class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:border-blue-300 transition text-left block">
            <div class="text-3xl mb-2">📚</div>
            <h3 class="text-lg font-bold text-slate-900">Explorar Archivos</h3>
            <p class="text-slate-500 text-sm">Busca apuntes organizados por materias.</p>
        </a>
        <a href="{{ route('resources.create') }}" class="p-6 border border-slate-200 rounded-xl bg-slate-50 hover:border-green-300 transition text-left block">
            <div class="text-3xl mb-2">📤</div>
            <h3 class="text-lg font-bold text-slate-900">Aportar Documento</h3>
            <p class="text-slate-500 text-sm">Sube tus archivos en formato PDF o imagen.</p>
        </a>
    </div>
</div>
@endsection
