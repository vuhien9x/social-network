<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NoteItem;
use App\Models\User;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Tạo 10 mục note
        for ($i = 1; $i <= 10; $i++) {
            NoteItem::create([
                'user_id' => $users->random()->id,
                'title' => "Note Item $i",
                'content' => "Content for note item $i",
            ]);
        }
    }
}
