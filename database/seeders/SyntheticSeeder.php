<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SyntheticCategory;
use App\Models\SyntheticItem;
use App\Models\User;

class SyntheticSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = SyntheticCategory::create([
                'name' => "Synthetic Category $i",
                'slug' => "synthetic-category-$i",
                'description' => "Description for synthetic category $i",
            ]);
        }

        // Tạo 10 mục synthetic
        foreach ($categories as $index => $category) {
            SyntheticItem::create([
                'user_id' => $users->random()->id,
                'synthetic_category_id' => $category->id,
                'title' => "Synthetic Item " . ($index + 1),
                'slug' => "synthetic-item-" . ($index + 1),
                'description' => "Description for synthetic item " . ($index + 1),
                'synthetic_url' => "https://example.com/synthetic-" . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
