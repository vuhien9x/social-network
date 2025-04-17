<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PostItem;

class PostCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function postItems()
    {
        return $this->hasMany(PostItem::class);
    }
}