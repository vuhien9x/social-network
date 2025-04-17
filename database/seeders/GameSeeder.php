<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameCategory;
use App\Models\GameItem;
use App\Models\User;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = GameCategory::create([
                'name' => "Game Category $i",
                'slug' => "game-category-$i",
                'description' => "Description for game category $i",
            ]);
        }

        // Tạo 10 mục game
        foreach ($categories as $index => $category) {
            GameItem::create([
                'user_id' => $users->random()->id,
                'game_category_id' => $category->id,
                'title' => "Game Item " . ($index + 1),
                'slug' => "game-item-" . ($index + 1),
                'description' => "Description for game item " . ($index + 1),
                'game_url' => "https://example.com/game-" . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
