<?php

namespace App\Containers\AppSection\Post\Models;

use App\Containers\AppSection\Category\Models\Category;
use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

class Post extends ParentModel
{
    protected $fillable = [
        'name',
        'slug',
        'title',
        'description',
        'date',
        'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'date' =>'date'
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Post';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
