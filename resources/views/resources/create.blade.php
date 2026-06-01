@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
    <h2 class="text-2xl font-bold mb-6">Compartir Material</h2>
    
    <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Título</label>
            <input type="text" name="title" required class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50">
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Descripción</label>
            <textarea name="description" rows="3" class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50"></textarea>
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Materia</label>
            <select name="subject_id" required class="w-full border border-slate-300 px-4 py-2 rounded-lg bg-slate-50">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Archivo (PDF/IMG)</label>
            <input type="file" name="file" required class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 mt-4">Publicar</button>
    </form>
</div>
@endsection