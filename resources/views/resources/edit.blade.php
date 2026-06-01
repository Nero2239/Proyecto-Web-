@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <h2 class="text-2xl font-bold mb-6 text-amber-600">Modificar Material: {{ $resource->title }}</h2>
    
    <form action="{{ route('resources.update', $resource->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT') <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Título del Apunte</label>
            <input type="text" name="title" value="{{ $resource->title }}" required class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50">
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Descripción</label>
            <textarea name="description" rows="3" class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50">{{ $resource->description }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Materia</label>
            <select name="subject_id" required class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $resource->subject_id == $subject->id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="flex gap-2 pt-2">
            <button type="submit" class="w-full bg-amber-500 text-white py-3 rounded-lg font-bold hover:bg-amber-600">Guardar Cambios</button>
            <a href="{{ route('resources.show', $resource->id) }}" class="w-full bg-slate-200 text-slate-700 py-3 rounded-lg font-bold hover:bg-slate-300 text-center">Cancelar</a>
        </div>
    </form>
</div>
@endsection