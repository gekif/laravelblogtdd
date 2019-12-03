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
        // make GET access to blog route
        $response = $this->get('blog');

        // assert HTTP status return is 200
        $response->assertStatus(200);
    }
}
