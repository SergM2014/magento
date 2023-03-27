<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model\VirtualType;

class DefaultName
{
    public function __construct(protected Name $name) {}

    public function getName(): string
    {
        return $this->name->getName('Default Name');
    }
}