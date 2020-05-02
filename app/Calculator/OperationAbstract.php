<?php

namespace App\Calculator;

class OperationAbstract
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

}