<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this
            ->withHeader("x-api-key", env("APP_KEY"))
            ->get('/api/test');

        $response
            ->assertSeeText("my first test")
            ->assertStatus(200);
    }
}
