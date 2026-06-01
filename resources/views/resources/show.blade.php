@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <div class="mb-6">
        <span class="text-sm font-bold uppercase px-3 py-1 bg-blue-100 text-blue-700 rounded">{{ $resource->subject->name }}</span>
        <h1 class="text-3xl font-black mt-4">{{ $resource->title }}</h1>
        <p class="text-slate-500 mt-2">Subido por {{ $resource->user->name }} • {{ $resource->created_at->diffForHumans() }}</p>
    </div>

    <div class="prose max-w-none mb-8 text-slate-700">
        <p>{{ $resource->description }}</p>
    </div>

    <div class="mb-8 text-center">
        <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" class="inline-block rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700">Descargar material</a>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <h2 class="text-xl font-bold mb-3">Comentarios</h2>
        <p class="text-slate-500">Aquí irán los comentarios del recurso.</p>
    </div>
</div>
@endsection
