<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'parent_comment_id' => null,
            'text' => $this->faker->paragraph,
        ];
    }

    public function withParent(): CommentFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'parent_comment_id' => Comment::factory(),
            ];
        });
    }
}
