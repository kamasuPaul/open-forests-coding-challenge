<?php

namespace App\Containers\AppSection\Comment\UI\API\Tests\Functional;

use App\Containers\AppSection\Comment\UI\API\Tests\ApiTestCase;
use App\Containers\AppSection\Post\Models\Post;

/**
 * Class CreateCommentTest.
 *
 * @group comment
 * @group api
 */
class CreateCommentTest extends ApiTestCase
{
    // the endpoint to be called within this test (e.g., get@v1/users)
    protected string $endpoint = 'post@v1/comments';

    // fake some access rights
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testUserCanCreateComment(): void
    {
        //create a post, get its id and create a comment
        $post = Post::factory()->createOne(
            [
                'user_id' => $this->getTestingUser()->id,
            ]
        );
        $postId = $post->id;
        $data = [
            'title' => 'Test Comment',
            'comment' => 'This is a test comment',
        ];

        // send the HTTP request
        $response = $this->endpoint('post@v1/posts/' . $postId.'/comments')->makeCall($data);

        // assert the response status
        $response->assertStatus(200);

        // assert the returned data
        $response->assertJsonFragment([
            'title' => $data['title'],
            'comment' => $data['comment'],
            'post_id' => (string)($postId),
            'user_id' => $this->getTestingUser()->id,
        ]);
        //assert data in database
        $this->assertDatabaseHas('comments', $data);

    }

}
