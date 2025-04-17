<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FilmItem;

class FilmCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function filmItems()
    {
        return $this->hasMany(FilmItem::class);
    }
}