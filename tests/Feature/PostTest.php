<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testAGuestCanAccessBlogIndex()
    {
        // Test Number 1
        /*// make GET access to blog route
        $response = $this->get('blog');

        // assert HTTP status return is 200
        $response->assertStatus(200);*/


        // Test Number 2
        // Giving Post Object

        // Create Post Data
        $post = factory('App\Post')->create();

        // When guest access blog url
        // Visit blog homepage
        $response = $this->get('/blog');

        // Then i've see blog title that create before
        // Expect to see post
        $response->assertSee($post->title);
    }


    public function testAGuestCanSeeSinglePost()
    {
        // Giving Post Data
        $post = factory('App\Post')->create();

        // When guest access blog/{id}
        $response = $this->get('/blog/' . $post->id);

        // Expect to see post title
        $response->assertSee($post->title);
    }
}
