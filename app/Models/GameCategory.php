<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GameItem;

class GameCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function gameItems()
    {
        return $this->hasMany(GameItem::class);
    }
}