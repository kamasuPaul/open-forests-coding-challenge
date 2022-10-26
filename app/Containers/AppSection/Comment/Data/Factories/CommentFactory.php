<?php

namespace App\Containers\AppSection\Comment\Data\Factories;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class CommentFactory extends ParentFactory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text,
            'comment' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1, 10),
            'post_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
