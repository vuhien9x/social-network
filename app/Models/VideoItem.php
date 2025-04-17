<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\VideoCategory;
use App\Models\Comment;

class VideoItem extends Model
{
    protected $fillable = [
        'user_id', 'video_category_id', 'title', 'slug', 'image', 'description', 'video_url', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videoCategory()
    {
        return $this->belongsTo(VideoCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}