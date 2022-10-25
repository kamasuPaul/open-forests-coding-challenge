<?php

namespace App\Containers\AppSection\Post\Data\Factories;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class PostFactory extends ParentFactory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'date' => $this->faker->date,
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
