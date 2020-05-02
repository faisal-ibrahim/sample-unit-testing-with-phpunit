<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition implements OperationInterface
{
    /**
     * @var array
     */
    protected $operands;

    /**
     * @param array $operands
     */
    public function setOperands(array $operands): void
    {
        $this->operands = $operands;
    }

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