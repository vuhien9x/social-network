<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\PostCategory;
use App\Models\Comment;

class PostItem extends Model
{
    protected $fillable = [
        'user_id', 'post_category_id', 'title', 'slug', 'image', 'description', 'content', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}