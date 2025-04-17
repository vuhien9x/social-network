<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MusicItem;

class MusicCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function musicItems()
    {
        return $this->hasMany(MusicItem::class);
    }
}