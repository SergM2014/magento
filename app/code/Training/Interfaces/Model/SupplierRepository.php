<?php

declare(strict_types=1);

namespace Training\Interfaces\Model;

use Training\Interfaces\Api\Data\SupplierInterface;
use Training\Interfaces\Api\Data\SupplierInterfaceFactory;
use Training\Interfaces\Api\SupplierRepositoryInterface;

class SupplierRepository  implements SupplierRepositoryInterface
{
    public function __construct(
        protected SupplierInterfaceFactory $supplierFactory,
        protected CodeValidationInterface $codeValidation
        ) {}

    public function createNew(string $code): SupplierInterface
    {
        $this->codeValidation->validate($code);

        $supplier = $this->supplierFactory->create();
        $supplier->setCode($code);

        return $supplier;
    }
}