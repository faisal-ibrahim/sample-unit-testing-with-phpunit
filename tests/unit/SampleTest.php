<?php

namespace unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
}