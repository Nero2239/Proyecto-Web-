@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h2 class="text-3xl font-black text-slate-900 tracking-tight mb-4">Recursos Académicos</h2>
    
    <div class="flex flex-wrap gap-2 pb-4 border-b border-slate-200">
        <a href="{{ route('resources.index') }}" class="px-4 py-2 rounded-xl text-sm font-semibold {{ !request('subject_id') ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
            🌟 Todos
        </a>
        @foreach($subjects as $subject)
            <a href="{{ route('resources.index', ['subject_id' => $subject->id]) }}" class="px-4 py-2 rounded-xl text-sm font-semibold {{ request('subject_id') == $subject->id ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                📚 {{ $subject->name }}
            </a>
        @endforeach
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($resources as $resource)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between">
            <div class="p-6">
                <div class="flex gap-2">
                    <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-blue-50 text-blue-700 rounded-md">
                        {{ $resource->subject->name }}
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-purple-50 text-purple-700 rounded-md">
                        {{ $resource->subject->semester->name ?? 'General' }}
                    </span>
                </div>
                <h3 class="text-xl font-bold mt-4 text-slate-900 leading-tight">{{ $resource->title }}</h3>
                <p class="text-slate-500 text-sm mt-2 line-clamp-2">{{ $resource->description }}</p>
            </div>
            <div class="px-6 py-4 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center text-xs font-medium text-slate-400">
                <span>Autor: {{ $resource->user->name }}</span>
                <a href="{{ route('resources.show', $resource->id) }}" class="text-blue-600 font-bold hover:text-blue-700">Detalles →</a>
            </div>
        </div>
    @empty
        <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-dashed border-slate-200">
            <p class="text-slate-400 font-medium">No hay recursos disponibles para esta categoría.</p>
        </div>
    @endforelse
</div>
@endsection