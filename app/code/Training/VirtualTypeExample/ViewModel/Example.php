<?php

declare(strict_types=1);

namespace Training\VirtualTypeExample\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\WarehouseManagement\Api\WarehouseRepositoryInterface;

class Example implements ArgumentInterface
{
    public function __construct(protected WarehouseRepositoryInterface $warehouseRepository) {}

    public function getWarehouse(RequestInterface $request)
    {
        return $this->warehouseRepository->newWarehouse((string)$request->getParam('code'));
    }
}