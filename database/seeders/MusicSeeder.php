<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MusicCategory;
use App\Models\MusicItem;
use App\Models\User;

class MusicSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = MusicCategory::create([
                'name' => "Music Category $i",
                'slug' => "music-category-$i",
                'description' => "Description for music category $i",
            ]);
        }

        // Tạo 10 mục music
        foreach ($categories as $index => $category) {
            MusicItem::create([
                'user_id' => $users->random()->id,
                'music_category_id' => $category->id,
                'title' => "Music Item " . ($index + 1),
                'slug' => "music-item-" . ($index + 1),
                'description' => "Description for music item " . ($index + 1),
                'music_url' => "https://example.com/music-" . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
