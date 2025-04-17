<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LearningCategory;
use App\Models\LearningItem;

class LearningBrand extends Model
{
    protected $fillable = ['learning_category_id', 'name', 'slug', 'image', 'description'];

    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class);
    }

    public function learningItems()
    {
        return $this->hasMany(LearningItem::class);
    }
}