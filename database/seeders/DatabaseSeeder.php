<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(50)->create();
        Post::factory(100)->create();
        Comment::factory(200)->create();
        Comment::factory(100)->withParent()->create();
    }
}
