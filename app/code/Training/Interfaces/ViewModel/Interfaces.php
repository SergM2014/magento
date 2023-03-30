<?php

declare(strict_types=1);

namespace Training\Interfaces\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Interfaces\Api\SupplierRepositoryInterface;

class Interfaces implements ArgumentInterface
{
    public function __construct(
        protected SupplierRepositoryInterface $supplierRepository
    ) {}

    public function getSupplierCode(): string
    {
        
        return $this->supplierRepository->createNew('ABC-123')->getCode();
    }
}