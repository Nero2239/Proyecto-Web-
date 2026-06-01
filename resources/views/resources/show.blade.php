@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <div class="mb-6">
        <span class="text-sm font-bold uppercase px-3 py-1 bg-blue-100 text-blue-700 rounded">{{ $resource->subject->name }}</span>
        <h1 class="text-3xl font-black mt-4">{{ $resource->title }}</h1>
        <p class="text-slate-500 mt-2">Subido por {{ $resource->user->name }} • {{ $resource->created_at->diffForHumans() }}</p>
    </div>

    <div class="bg-slate-50 p-6 rounded-xl border border-slate-200 mb-8">
        <h3 class="font-bold mb-2">Descripción:</h3>
        <p class="text-slate-700 mb-4">{{ $resource->description ?? 'Sin descripción.' }}</p>
        
        <div class="flex flex-wrap gap-2">
            <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-700">Ver Archivo Adjunto</a>
            
            <a href="{{ route('resources.edit', $resource->id) }}" class="bg-amber-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-amber-600">Editar Datos</a>
            
            <form action="{{ route('resources.destroy', $resource->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este apunte?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-rose-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-rose-700">Eliminar Recurso</button>
            </form>
        </div>
    </div>

    <h3 class="text-xl font-bold mb-4">Comentarios ({{ $resource->comments->count() }})</h3>
    
    <form action="{{ route('comments.store', $resource->id) }}" method="POST" class="mb-8">
        @csrf
        <textarea name="content" rows="2" required placeholder="Agrega un comentario..." class="w-full border border-slate-300 px-4 py-2 rounded-lg mb-2"></textarea>
        <button type="submit" class="bg-slate-800 text-white px-4 py-2 rounded-lg font-bold hover:bg-slate-900">Comentar</button>
    </form>

    <div class="space-y-4">
        @foreach($resource->comments as $comment)
            <div class="p-4 bg-slate-50 rounded-lg border border-slate-200">
                <span class="font-bold text-sm">{{ $comment->user->name }}</span>
                <span class="text-xs text-slate-400 ml-2">{{ $comment->created_at->diffForHumans() }}</span>
                <p class="mt-1 text-slate-700">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection