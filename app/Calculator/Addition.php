<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition extends OperationAbstract implements OperationInterface
{
    public function calculate()
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException();
        }

        /*$result = 0;

        foreach ($this->operands as $operand) {
            $result += $operand;
        }

        return $result;*/

        // Another way we can refactor above commented code like below
        return array_sum($this->operands);
    }
}