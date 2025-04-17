<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LearningBrand;

class LearningCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function learningBrands()
    {
        return $this->hasMany(LearningBrand::class);
    }
}