@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <h2 class="text-2xl font-bold mb-6">Compartir Material</h2>
    <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-semibold text-slate-700">Título</label>
            <input type="text" name="title" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:border-blue-500 focus:outline-none" placeholder="Nombre del recurso" />
        </div>

        <div>
            <label class="block text-sm font-semibold text-slate-700">Descripción</label>
            <textarea name="description" rows="4" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 shadow-sm focus:border-blue-500 focus:outline-none" placeholder="Describe brevemente el material"></textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-slate-700">Archivo</label>
            <input type="file" name="file" class="mt-2 w-full text-sm text-slate-700" />
        </div>

        <div class="flex items-center justify-between gap-4">
            <a href="{{ route('resources.index') }}" class="text-sm font-semibold text-slate-600 hover:text-slate-900">Volver a recursos</a>
            <button type="submit" class="rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700">Compartir material</button>
        </div>
    </form>
</div>
@endsection
