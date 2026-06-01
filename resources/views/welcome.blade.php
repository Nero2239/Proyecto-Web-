@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-100 py-16">
    <div class="mx-auto max-w-4xl space-y-8">
        <div class="rounded-3xl border border-slate-200 bg-white p-10 shadow-sm">
            <h1 class="text-4xl font-black text-slate-900">Biblioteca de recursos académicos</h1>
            <p class="mt-4 text-slate-600">Comparte apuntes, descarga material y descubre contenido útil para tus clases.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('resources.index') }}" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white hover:bg-blue-700">Ver recursos</a>
                <a href="{{ route('resources.create') }}" class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-100">Compartir material</a>
            </div>
        </div>
    </div>
</div>
@endsection
