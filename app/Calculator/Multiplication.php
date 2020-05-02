<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Multiplication extends OperationAbstract implements OperationInterface
{
    public function calculate()
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException();
        }

        return array_product($this->operands);
    }
}
