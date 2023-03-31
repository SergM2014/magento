<?php

declare(strict_types=1);

namespace Training\PoolPattern\Model;

class CodeValidationPool
{
    public function __construct( protected array $validations) {}

    public function validate(string $code): void
    {
        foreach ($this->validations as $validation) {
            $validation->validate($code);
        }
    }
}