<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostCategory;
use App\Models\PostItem;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = PostCategory::create([
                'name' => "Post Category $i",
                'slug' => "post-category-$i",
                'description' => "Description for post category $i",
            ]);
        }

        // Tạo 10 mục post
        foreach ($categories as $index => $category) {
            PostItem::create([
                'user_id' => $users->random()->id,
                'post_category_id' => $category->id,
                'title' => "Post Item " . ($index + 1),
                'slug' => "post-item-" . ($index + 1),
                'description' => "Description for post item " . ($index + 1),
                'content' => "Content for post item " . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
