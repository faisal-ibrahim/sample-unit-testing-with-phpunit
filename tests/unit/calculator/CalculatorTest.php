<?php

namespace unit\calculator;

use App\Calculator\Addition;
use App\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCanSetSingleOperation()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }

    public function testCanSetMultipleOperation()
    {
        $addition1 = new Addition();
        $addition1->setOperands([5, 10]);

        $addition2 = new Addition();
        $addition2->setOperands([10, 10]);


        $calculator = new Calculator();
        $calculator->setOperations([$addition1, $addition2]);

        $this->assertCount(2, $calculator->getOperations());
    }

    public function testOperationsAreIgnoredIfNotInstanceOfOperationInterface()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition, 'Faisal', 'Ibrahim']);

        $this->assertCount(1, $calculator->getOperations());
    }
}
