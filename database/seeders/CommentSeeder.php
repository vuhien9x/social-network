<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\SyntheticItem;
use App\Models\VideoItem;
use App\Models\GameItem;
use App\Models\FilmItem;
use App\Models\MusicItem;
use App\Models\PostItem;
use App\Models\NoteItem;
use App\Models\LearningItem;
use App\Models\User;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $commentableTypes = [
            SyntheticItem::class,
            VideoItem::class,
            GameItem::class,
            FilmItem::class,
            MusicItem::class,
            PostItem::class,
            NoteItem::class,
            LearningItem::class,
        ];

        // Tạo 10 bình luận
        for ($i = 1; $i <= 10; $i++) {
            $commentableType = $commentableTypes[array_rand($commentableTypes)];
            $commentable = $commentableType::inRandomOrder()->first();

            if ($commentable) {
                Comment::create([
                    'user_id' => $users->random()->id,
                    'commentable_id' => $commentable->id,
                    'commentable_type' => $commentableType,
                    'content' => "Comment $i on " . class_basename($commentableType),
                ]);
            }
        }
    }
}
