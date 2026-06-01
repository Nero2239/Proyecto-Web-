<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Resource $resource)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $user = User::first() ?? User::factory()->create();

        $resource->comments()->create([
            'content' => $request->content,
            'user_id' => $user->id
        ]);

        return back()->with('success', 'Comentario publicado.');
    }
}