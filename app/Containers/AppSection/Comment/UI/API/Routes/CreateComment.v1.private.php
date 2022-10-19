<?php

/**
 * @apiGroup           Comment
 * @apiName            CreateComment
 *
 * @api                {POST} /v1/posts/:post_id/comments Create Comment
 * @apiDescription     Create a comment.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} post_id Post id
 *
 * @apiBody            {String{3..50}} title
 * @apiBody            {String{3..2500}} comment
 *
 * @apiUse             CommentSuccessSingleResponse
 */

use App\Containers\AppSection\Comment\UI\API\Controllers\CreateCommentController;
use Illuminate\Support\Facades\Route;

Route::post('posts/{post_id}/comments', [CreateCommentController::class, 'createComment'])
    ->middleware(['auth:api']);

