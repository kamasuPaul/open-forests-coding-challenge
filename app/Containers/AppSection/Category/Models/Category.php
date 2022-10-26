<?php

namespace App\Containers\AppSection\Category\Models;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Models\Model as ParentModel;

class Category extends ParentModel
{
    protected $fillable = [
        'label',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Category';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
