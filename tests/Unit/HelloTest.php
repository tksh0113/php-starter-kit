<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\HelloWorld;

use function PHPUnit\Framework\assertSame;
use function App\hello;

class HelloTest extends TestCase
{
    /**
     * @test
     */
    public function helloが返却されること()
    {
        assertSame("hello", hello());
    }

    /**
     * @test
     */
    public function helloworldが返却されること()
    {
        assertSame("hello world", (new HelloWorld())->hello());
    }
}
