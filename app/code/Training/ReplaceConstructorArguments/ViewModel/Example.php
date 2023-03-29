<?php

declare(strict_types=1);

namespace Training\ReplaceConstructorArguments\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\ReplaceConstructorArguments\Model\DefaultName;

class Example implements ArgumentInterface
{
    public function __construct(
         protected DefaultName $defaultName
         ) {}

    public function getName(): string
    {
        return $this->defaultName->getName();
    }
}