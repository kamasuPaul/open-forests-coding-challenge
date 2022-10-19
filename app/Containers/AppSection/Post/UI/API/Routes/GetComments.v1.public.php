<?php

/**
 * @apiGroup           Post
 * @apiName            GetComments
 *
 * @api                {GET} /v1/posts/:id/comments Get Comments for specific Post
 * @apiDescription     Get comments for specific post.
 *
 * @apiVersion         1.0.0
 * @apiPermission      None
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} id Post id
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

use App\Containers\AppSection\Post\UI\API\Controllers\GetCommentsController;
use Illuminate\Support\Facades\Route;

Route::get('posts/{id}/comments', [GetCommentsController::class, 'getComments']);
