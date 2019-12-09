<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    public function testCommentShouldHasCreator()
    {
        // Giving Comment Object
        $comment = factory('App\Comment')->create();

        // Should include user object
        // I Expect creator function has user instance
        $this->assertInstanceOf('App\User', $comment->creator);
    }
}
