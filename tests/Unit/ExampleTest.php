<?php

namespace Tests\Unit;

use KimBev\Payments\TestClass01;
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

        Log::debug(Session::getId() . " ExampleTest:testBasicTest testing lara_pack01 class");
        $laraPack01 = new TestClass01(array());
        $value = $laraPack01->getCallbacks();
        $this->assertEquals("hello", $value);
    }
}
