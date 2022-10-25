<?php

namespace App\Containers\AppSection\Post\Data\Repositories;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PostRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like',
        'slug' => 'like',
        'title' => 'like',
    ];

    /**
     * @return string
     */
    public function model(): string
    {
        return Post::class;
    }
}
