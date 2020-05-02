<?php
namespace unit\calculator;

use App\Calculator\Addition;
use App\Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAddsUpGivenOperands()
    {
        $addition = new Addition();

        $addition->setOperands([5, 10]);

        $this->assertEquals(15, $addition->calculate());
    }

    public function testNoOperandsGivenThrowsExceptionWhenCalculation()
    {
        $this->expectException(NoOperandsException::class);

        $addition = new Addition();
        $addition->setOperands([]);
        $addition->calculate();
    }
}
