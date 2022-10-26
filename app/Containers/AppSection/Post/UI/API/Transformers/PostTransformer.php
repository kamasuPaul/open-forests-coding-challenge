<?php

namespace App\Containers\AppSection\Post\UI\API\Transformers;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PostTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [
        'comments',
        'user',
        'category'
    ];

    public function transform(Post $post): array
    {
        $response = [
            'object' => $post->getResourceKey(),
            'id' => $post->getHashedKey(),
            'slug' => $post->slug,
            'title' => $post->title,
            'description' => $post->description,
            'date' => $post->date,
            'user_id' => $post->user_id,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
        ];

        return $this->ifAdmin([
            'real_id' => $post->id,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
            'readable_created_at' => $post->created_at->diffForHumans(),
            'readable_updated_at' => $post->updated_at->diffForHumans(),
            // 'deleted_at' => $post->deleted_at,
        ], $response);
    }
}
