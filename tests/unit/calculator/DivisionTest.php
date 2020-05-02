<?php

namespace unit\calculator;

use App\Calculator\Division;
use App\Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testDividesGivenOperands()
    {
        $division = new Division();
        $division->setOperands([50, 10]);

        $this->assertEquals(5, $division->calculate());

        $division = new Division();
        $division->setOperands([50, 5, 5]);

        $this->assertEquals(2, $division->calculate());
    }

    public function testRemoveDivisionByZeroOperands()
    {
        $division = new Division();

        $division->setOperands([50, 0, 0, 10]);

        $this->assertEquals(5, $division->calculate());
    }

    public function testNoOperandsGivenThrowsExceptionWhenCalculation()
    {
        $this->expectException(NoOperandsException::class);

        $division = new Division();
        $division->setOperands([]);
        $division->calculate();
    }
}
