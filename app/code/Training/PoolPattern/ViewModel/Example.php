<?php

declare(strict_types=1);

namespace Training\PoolPattern\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\PoolPattern\Model\CodeValidationPool;

class Example implements ArgumentInterface
{

    public function __construct(
        protected CodeValidationPool $codeValidation
    ) {}

    public function getCode(RequestInterface $request): string
    {
        $code = (string)$request->getParam('code');
        $this->codeValidation->validate($code);

        return $code;
    }
}