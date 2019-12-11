<?php

namespace Tests\Feature;

use App\Facades\TestBasicServiceFacade;
use App\Services\TestBasicService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MockTest extends TestCase
{
    public function testExample()
    {
        $this->mock(TestBasicService::class, function ($mock) {
            $mock->shouldReceive('getForMock')->once()->andReturn("my third test");
            $result = $mock->getForMock(234);
            $this->assertEquals($result, "my third test");
        });
    }

    public function testWithFacade() {
        TestBasicServiceFacade::shouldReceive('getForMock')->once()->andReturn("my third test");
        $result = TestBasicServiceFacade::getForMock(123);
        $this->assertEquals($result, "my third test");
    }
}
