<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use Log;
Use Session;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Log::debug(Session::getId() . " ExampleTest:testBasicTest start");
        $this->assertTrue(true);
    }
}
