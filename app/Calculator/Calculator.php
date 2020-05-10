<?php

namespace App\Calculator;

class Calculator
{
    /**
     * @var OperationInterface
     */
    protected $operations = [];

    /**
     * @param OperationInterface $operations
     */
    public function setOperation(OperationInterface $operation): void
    {
        $this->operations[] = $operation;
    }

    public function setOperations(array $operations): void
    {
       /* foreach ($operations as $index => $operation) {
            if (!$operation instanceof OperationInterface) {
                unset($operations[$index]);
            }
        }*/

        /*$filteredOperations = array_filter($operations, function ($operation) {
            if (!$operation instanceof OperationInterface) {
                return false;
            }

            return true;
        });*/

        // We can refactor above commented code like below.
        $filteredOperations = array_filter($operations, function ($operation) {
            return $operation instanceof OperationInterface;
        });

        $this->operations = array_merge($this->operations, $filteredOperations);
    }

    /**
     * @return OperationInterface
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
