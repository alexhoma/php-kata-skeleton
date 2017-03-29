<?php

namespace PHPKataSkeleton\HelloTest;

use PHPKataSkeleton\Hello\HelloKata;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @var HelloKata */
    private $helloKata;

    public function setUp()
    {
        parent::setUp();

        $this->helloKata = new HelloKata();
    }

    /** @test */
    public function it_should_return_hello_kata()
    {
        $this->assertEquals(
            $this->helloKata->sayHello(),
            'Hello kitt.. sorry! kata! :P'
        );
    }
}