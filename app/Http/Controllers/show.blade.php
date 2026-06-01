@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <div class="mb-6">
        <span class="text-sm font-bold uppercase px-3 py-1 bg-blue-100 text-blue-700 rounded">{{ $resource->subject->name }}</span>
        <h1 class="text-3xl font-black mt-4">{{ $resource->title }}</h1>
        <p class="text-slate-500 mt-2">Subido por {{ $resource->user->name }} - {{ $resource->created_at->diffForHumans() }}</p>
    </div>

    <div class="prose max-w-none mb-8">
        <p>{{ $resource->description }}</p>
    </div>

    <div class="mb-8 text-center">
        <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" class="inline-block bg-blue-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-blue-700">Descargar Material</a>
    </div>

    <h3 class="text-xl font-bold mb-4">Comentarios</h3>
    <form action="{{ route('comments.store', $resource->id) }}" method="POST" class="mb-6">
        @csrf
        <textarea name="content" rows="3" class="w-full border rounded-lg px-4 py-2 mb-2" placeholder="Escribe un comentario..."></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold">Publicar</button>
    </form>

    <div class="space-y-4">
        @forelse($resource->comments as $comment)
            <div class="bg-slate-50 p-4 rounded-xl">
                <div class="flex justify-between items-center mb-1">
                    <span class="font-bold text-sm">{{ $comment->user->name }}</span>
                    <span class="text-xs text-slate-400">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-slate-600">{{ $comment->content }}</p>
            </div>
        @empty
            <p class="text-slate-500 italic">No hay comentarios aún.</p>
        @endforelse
    </div>
</div>
@endsection