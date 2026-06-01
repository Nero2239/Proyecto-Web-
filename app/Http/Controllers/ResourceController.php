<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(Request $request)
    {
        $subjects = Subject::all();
        $query = Resource::with(['user', 'subject.semester']);

        if ($request->has('subject_id')) {
            $query->where('subject_id', $request->subject_id);
        }

        $resources = $query->latest()->get();

        return view('resources.index', compact('resources', 'subjects'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('resources.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'required|exists:subjects,id',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        $path = $request->file('file')->store('resources', 'public');
        $user = User::first() ?? User::factory()->create();

        Resource::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $path,
            'user_id' => $user->id, 
            'subject_id' => $request->subject_id,
        ]);

        return redirect()->route('resources.index')->with('success', 'Recurso compartido con éxito.');
    }

    public function show(Resource $resource)
    {
        $resource->load(['user', 'subject', 'comments.user']);
        return view('resources.show', compact('resource'));
    }

    public function edit(Resource $resource)
    {
        $subjects = Subject::all();
        return view('resources.edit', compact('resource', 'subjects'));
    }

    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $resource->update([
            'title' => $request->title,
            'description' => $request->description,
            'subject_id' => $request->subject_id,
        ]);

        return redirect()->route('resources.index')->with('success', 'Recurso actualizado con éxito.');
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('resources.index')->with('success', 'Recurso eliminado correctamente.');
    }
}