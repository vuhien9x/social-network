<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\GameCategory;
use App\Models\Comment;

class GameItem extends Model
{
    protected $fillable = [
        'user_id', 'game_category_id', 'title', 'slug', 'image', 'description', 'game_url', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gameCategory()
    {
        return $this->belongsTo(GameCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}