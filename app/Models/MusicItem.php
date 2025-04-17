<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\MusicCategory;
use App\Models\Comment;

class MusicItem extends Model
{
    protected $fillable = [
        'user_id', 'music_category_id', 'title', 'slug', 'image', 'description', 'music_url', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function musicCategory()
    {
        return $this->belongsTo(MusicCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}