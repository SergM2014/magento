<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

use Training\DependencyExample\Model\VirtualType\DefaultName;
use Magento\Framework\DataObject;

class Main 
{
    public function __construct(
        protected InjectableInterface $injectable,
        protected NonInjectableInterfaceFactory $nonInjectableFactory,
        protected AbstractUtil $util,
        protected HeavyOperation $heavyOperation,
        protected DefaultName $defaultName,
        protected MethodInjection $methodInjection,
        protected ?Optional $optional = null,
        protected array $data = [],
        )
    {
        
    }

    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable(): NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }

    public function getUtil(): AbstractUtil
    {
        return $this->util;
    }

    public function getHeavyOperation(): HeavyOperation
    {
        return $this->heavyOperation;
    }

    public function getDefaultName(): DefaultName
    {
        return $this->defaultName;
    }

    public function getOptional(): Optional
    {
        return $this->optional;
    }

    public function getMethodInjectionName(): string
    {
        $dataObject = new DataObject(['name' => 'Method injection']);

        return $this->methodInjection->getName($dataObject);
    }
}