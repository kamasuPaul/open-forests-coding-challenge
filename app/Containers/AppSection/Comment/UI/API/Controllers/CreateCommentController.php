<?php

namespace App\Containers\AppSection\Comment\UI\API\Controllers;

use App\Containers\AppSection\Comment\Actions\CreateCommentAction;
use App\Containers\AppSection\Comment\UI\API\Requests\CreateCommentRequest;
use App\Containers\AppSection\Comment\UI\API\Transformers\CommentTransformer;
use App\Ship\Parents\Controllers\ApiController;

class CreateCommentController extends ApiController
{
    public function createComment(CreateCommentRequest $request)
    {
        $comment = app(CreateCommentAction::class)->run($request);
        return $this->transform($comment, CommentTransformer::class);
    }
}
