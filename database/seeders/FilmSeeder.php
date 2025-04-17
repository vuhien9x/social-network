<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FilmCategory;
use App\Models\FilmItem;
use App\Models\User;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 danh mục
        $categories = [];
        for ($i = 1; $i <= 10; $i++) {
            $categories[] = FilmCategory::create([
                'name' => "Film Category $i",
                'slug' => "film-category-$i",
                'description' => "Description for film category $i",
            ]);
        }

        // Tạo 10 mục film
        foreach ($categories as $index => $category) {
            FilmItem::create([
                'user_id' => $users->random()->id,
                'film_category_id' => $category->id,
                'title' => "Film Item " . ($index + 1),
                'slug' => "film-item-" . ($index + 1),
                'description' => "Description for film item " . ($index + 1),
                'film_url' => "https://example.com/film-" . ($index + 1),
                'views' => rand(0, 1000),
            ]);
        }
    }
}
