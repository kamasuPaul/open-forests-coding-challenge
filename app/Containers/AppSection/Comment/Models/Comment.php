<?php

namespace App\Containers\AppSection\Comment\Models;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Models\Model as ParentModel;

class Comment extends ParentModel
{
    protected $fillable = [
        'title',
        'comment',
        'post_id',
        'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Comment';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
