<?php

/**
 * @apiGroup           Post
 * @apiName            CreatePost
 *
 * @api                {POST} /v1/posts Create Post
 * @apiDescription     Create a Post.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiBody            {String{3..25}} slug unique lower case slug
 * @apiBody            {String{3..150}} title
 * @apiBody            {String{3..2500}} description
 * @apiBody            {Date} date
 * @apiBody            {String} [category_id] Category id
 *
 * @apiUse             PostSuccessSingleResponse
 */

use App\Containers\AppSection\Post\UI\API\Controllers\CreatePostController;
use Illuminate\Support\Facades\Route;

Route::post('posts', [CreatePostController::class, 'createPost'])
    ->middleware(['auth:api']);

