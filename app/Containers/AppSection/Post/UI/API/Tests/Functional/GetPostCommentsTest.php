<?php

namespace App\Containers\AppSection\Post\UI\API\Tests\Functional;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Post\Models\Post;
use App\Containers\AppSection\Post\UI\API\Tests\ApiTestCase;

/**
 * Class GetPostCommentsTest.
 *
 * @group post
 * @group api
 */
class GetPostCommentsTest extends ApiTestCase
{
    // the endpoint to be called within this test (e.g., get@v1/users)
    protected string $endpoint = 'method@endpoint';

    // fake some access rights
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testGetPostCommentsReturns200(): void
    {
        $post = Post::factory()->createOne([
            'user_id' => $this->getTestingUser()->id,
        ]);
        $comments = Comment::factory()->count(5)->create([
            'post_id' => $post->id,
            'user_id' => $this->getTestingUser()->id,
        ]);

        // send the HTTP request
        $response = $this->endpoint('get@v1/posts/' . $post->id.'/comments')->makeCall();

        // assert the response status
        $response->assertStatus(200);
        $response->assertJsonCount(5, 'data');

    }
}
