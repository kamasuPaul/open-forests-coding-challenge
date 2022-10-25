<?php

namespace App\Containers\AppSection\Post\UI\API\Tests\Functional;

use App\Containers\AppSection\Post\UI\API\Tests\ApiTestCase;

/**
 * Class CreatePostTest.
 *
 * @group post
 * @group api
 */
class CreatePostTest extends ApiTestCase
{
    // the endpoint to be called within this test (e.g., get@v1/users)
    protected string $endpoint = 'post@v1/posts';

    // fake some access rights
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testUserCanCreatePost(): void
    {
        $data = [
            'slug' => 'test-slug',
            'title' => 'test-title',
            'description' => 'test-description',
            'date' => '2021-01-01',
        ];

        // send the HTTP request
        $response = $this->makeCall($data);

        // assert the response status
        $response->assertStatus(200);

        // assert the returned data
        $response->assertJsonFragment([
            'slug' => $data['slug'],
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
        //assert database has the post
        $this->assertDatabaseHas('posts', $data);

        // make other asserts here
    }
    // test for validation
    public function testUserCanNotCreatePostWithInvalidData(): void
    {
        $data = [
            'slug' => 't',
            'title' => 't',
            'description' => 't',
        ];

        // send the HTTP request
        $response = $this->makeCall($data);

        // assert the response status
        $response->assertStatus(422);
        //assert database has no post
        $this->assertDatabaseMissing('posts', $data);

        // make other asserts here
    }
}
