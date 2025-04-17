<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            LearningSeeder::class,
            SyntheticSeeder::class,
            VideoSeeder::class,
            GameSeeder::class,
            FilmSeeder::class,
            MusicSeeder::class,
            PostSeeder::class,
            NoteSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
