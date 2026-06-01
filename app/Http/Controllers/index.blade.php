@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-black mb-6">Recursos Académicos</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($resources as $resource)
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden flex flex-col">
            <div class="p-5 flex-grow">
                <span class="text-xs font-bold uppercase px-2 py-1 bg-blue-100 text-blue-700 rounded">{{ $resource->subject->name }}</span>
                <h3 class="text-xl font-bold mt-3">{{ $resource->title }}</h3>
                <p class="text-slate-500 text-sm mt-2 line-clamp-2">{{ $resource->description }}</p>
            </div>
            <div class="px-5 py-3 bg-slate-50 border-t border-slate-100 flex justify-between items-center text-sm">
                <span class="text-slate-500">Por: {{ $resource->user->name }}</span>
                <a href="{{ route('resources.show', $resource->id) }}" class="text-blue-600 font-bold hover:underline">Ver más...</a>
            </div>
        </div>
    @empty
        <p class="text-slate-500 col-span-3 text-center py-10">No hay recursos disponibles.</p>
    @endforelse
</div>
@endsection