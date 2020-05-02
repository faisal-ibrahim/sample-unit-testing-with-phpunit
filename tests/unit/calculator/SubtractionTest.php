<?php

namespace unit\calculator;

use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    public function testSubtractionInGivenOperands()
    {
        $subtraction = new Subtraction();
        $subtraction->setOperands([10, 5]);

        $this->assertEquals(5, $subtraction->calculate());

        $subtraction = new Subtraction();
        $subtraction->setOperands([10, 20]);

        $this->assertEquals(-10, $subtraction->calculate());

        $subtraction = new Subtraction();
        $subtraction->setOperands([50, 6, 8, 9]);

        $this->assertEquals(27, $subtraction->calculate());
    }

    public function testNoOperandsGivenThrowsExceptionWhenCalculation()
    {
        $this->expectException(NoOperandsException::class);

        $subtraction = new Subtraction();
        $subtraction->setOperands([]);
        $subtraction->calculate();
    }
}