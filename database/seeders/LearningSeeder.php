<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LearningCategory;
use App\Models\LearningBrand;
use App\Models\LearningItem;
use App\Models\User;

class LearningSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = LearningCategory::create([
                'name' => "Learning Category $i",
                'slug' => "learning-category-$i",
                'description' => "Description for category $i",
            ]);
        }

        // Tạo 10 thương hiệu
        $brands = [];
        foreach ($categories as $category) {
            $brands[] = LearningBrand::create([
                'learning_category_id' => $category->id,
                'name' => "Brand for Category $category->name",
                'slug' => "brand-category-$category->id",
                'description' => "Description for brand in category $category->id",
            ]);
        }

        // Tạo 10 mục học tập
        foreach ($brands as $index => $brand) {
            LearningItem::create([
                'user_id' => $users->random()->id,
                'learning_brand_id' => $brand->id,
                'title' => "Learning Item " . ($index + 1),
                'slug' => "learning-item-" . ($index + 1),
                'description' => "Description for learning item " . ($index + 1),
                'content' => "Content for learning item " . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
