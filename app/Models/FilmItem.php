<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\FilmCategory;
use App\Models\Comment;

class FilmItem extends Model
{
    protected $fillable = [
        'user_id', 'film_category_id', 'title', 'slug', 'image', 'description', 'film_url', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function filmCategory()
    {
        return $this->belongsTo(FilmCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}