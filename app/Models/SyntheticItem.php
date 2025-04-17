<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SyntheticCategory;
use App\Models\Comment;

class SyntheticItem extends Model
{
    protected $fillable = [
        'user_id', 'synthetic_category_id', 'title', 'slug', 'image', 'description', 'synthetic_url', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function syntheticCategory()
    {
        return $this->belongsTo(SyntheticCategory::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}