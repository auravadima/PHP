<?php

namespace Tests\Feature;

use App\UselessTest;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DBTest extends TestCase
{
    use DatabaseTransactions;

    public function testExample()
    {
        $countBefore = UselessTest::all()->count();
        factory(UselessTest::class, 3)->create()->each(function($test) {
            $test->save(factory(UselessTest::class)->make()->toArray());
        });

        $countAfter = UselessTest::all()->count();

        $this->assertEquals($countBefore + 3, $countAfter);
    }
}
