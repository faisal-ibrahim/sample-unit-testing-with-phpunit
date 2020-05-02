<?php

namespace unit\calculator;

use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testMultiplicationInGivenOperands()
    {
        $multiplication = new Multiplication();
        $multiplication->setOperands([5, 5]);

        $this->assertEquals(25, $multiplication->calculate());

        $multiplication = new Multiplication();
        $multiplication->setOperands([5, 5, 5]);

        $this->assertEquals(125, $multiplication->calculate());
    }

    public function testNoOperandsGivenThrowsExceptionWhenCalculation()
    {
        $this->expectException(NoOperandsException::class);

        $multiplication = new Multiplication();
        $multiplication->setOperands([]);
        $multiplication->calculate();
    }
}
