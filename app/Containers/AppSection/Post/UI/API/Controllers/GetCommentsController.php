<?php

namespace App\Containers\AppSection\Post\UI\API\Controllers;

use App\Containers\AppSection\Comment\UI\API\Transformers\CommentTransformer;
use App\Containers\AppSection\Post\Actions\GetCommentsByPostIdAction;
use App\Containers\AppSection\Post\UI\API\Requests\GetCommentsByPostIdRequest;
use App\Ship\Parents\Controllers\ApiController;

class GetCommentsController extends ApiController
{
    public function getComments(GetCommentsByPostIdRequest $request)
    {
        $comments = app(GetCommentsByPostIdAction::class)->run($request);
        return $this->transform($comments, CommentTransformer::class);
}
}
