<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SyntheticItem;

class SyntheticCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function syntheticItems()
    {
        return $this->hasMany(SyntheticItem::class);
    }
}