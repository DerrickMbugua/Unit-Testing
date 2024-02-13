<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->get('/posts')
            ->assertSee('Post A')
            ->assertSeeInOrder([
                'Post A',
                'Post B'
            ]);
        // $response->assertStatus(200);
    }
}
