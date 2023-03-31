<?php

declare(strict_types=1);

namespace Training\PoolPattern\Model;

use Training\Interfaces\Model\CodeValidationInterface;

class CodeAlnumValidation implements CodeValidationInterface
{
    public function validate(string $code): void
    {
        if (!ctype_alnum($code)) {
            throw new \InvalidArgumentException('Code must be only alphanumeric charecters');
        }
    }
}