<?php

namespace App\Containers\AppSection\Post\UI\API\Controllers;

use App\Containers\AppSection\Post\Actions\CreatePostAction;
use App\Containers\AppSection\Post\UI\API\Requests\CreatePostRequest;
use App\Containers\AppSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;

class CreatePostController extends ApiController
{
    public function createPost(CreatePostRequest $request){
        $post = app(CreatePostAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }
}
