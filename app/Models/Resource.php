<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['title', 'description', 'file_path', 'user_id', 'subject_id'];

public function user() {
    return $this->belongsTo(User::class);
}

public function subject() {
    return $this->belongsTo(Subject::class);
}

public function comments() {
    return $this->hasMany(Comment::class);
}
}
