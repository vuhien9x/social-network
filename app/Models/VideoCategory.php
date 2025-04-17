<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VideoItem;

class VideoCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function videoItems()
    {
        return $this->hasMany(VideoItem::class);
    }
}