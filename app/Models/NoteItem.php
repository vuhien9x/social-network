<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\NoteCategory;
use App\Models\Comment;

class NoteItem extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'image', 'description', 'content', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}