<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\LearningBrand;
use App\Models\Comment;

class LearningItem extends Model
{
    protected $fillable = [
        'user_id', 'learning_brand_id', 'title', 'slug', 'image', 'description', 'content', 'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function learningBrand()
    {
        return $this->belongsTo(LearningBrand::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}