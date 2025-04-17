<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VideoCategory;
use App\Models\VideoItem;
use App\Models\User;

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = VideoCategory::create([
                'name' => "Video Category $i",
                'slug' => "video-category-$i",
                'description' => "Description for video category $i",
            ]);
        }

        // Tạo 10 mục video
        foreach ($categories as $index => $category) {
            VideoItem::create([
                'user_id' => $users->random()->id,
                'video_category_id' => $category->id,
                'title' => "Video Item " . ($index + 1),
                'slug' => "video-item-" . ($index + 1),
                'description' => "Description for video item " . ($index + 1),
                'video_url' => "https://example.com/video-" . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
