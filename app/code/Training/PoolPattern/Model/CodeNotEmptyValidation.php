<?php

declare(strict_types=1);

namespace Training\PoolPattern\Model;

use Training\Interfaces\Model\CodeValidationInterface;

class CodeNotEmptyValidation implements CodeValidationInterface
{
    public function validate(string $code): void
    {
        if ($code === '') {
            throw new \InvalidArgumentException('Code can not be empty');
        }
    }
}