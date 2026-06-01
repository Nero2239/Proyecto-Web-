<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        // Trae los recursos con su autor y materia, ordenados por el más reciente
        $resources = Resource::with(['user', 'subject'])->latest()->get();
        return view('resources.index', compact('resources'));
    }

    public function create()
    {
        // Trae todas las materias para llenar el <select> del formulario
        $subjects = Subject::all();
        return view('resources.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        // Valida que no suban basura
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'subject_id' => 'required|exists:subjects,id',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        // Guarda el archivo físicamente
        $path = $request->file('file')->store('resources', 'public');

        // Asegura que exista un usuario para que la llave foránea no falle
        $user = User::first() ?? User::factory()->create();

        // Guarda el registro en la base de datos
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
        // Carga el recurso específico con sus comentarios para la vista de Detalles
        $resource->load(['user', 'subject', 'comments.user']);
        return view('resources.show', compact('resource'));
    }
}