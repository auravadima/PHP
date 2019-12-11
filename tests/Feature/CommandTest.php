<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommandTest extends TestCase
{
    public function testExample()
    {
        $this->artisan('command:name')
            ->expectsOutput('not my first test')
            ->assertExitCode(0);
    }
}
