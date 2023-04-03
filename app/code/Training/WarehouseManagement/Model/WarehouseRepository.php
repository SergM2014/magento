<?php

declare(strict_types=1);

namespace Training\WarehouseManagement\Model;

use Magento\Framework\DataObject;
use Training\WarehouseManagement\Api\WarehouseManagementInterface;
use Training\WarehouseManagement\Api\WarehouseRepositoryInterface;

class WarehouseRepository implements WarehouseRepositoryInterface
{
    public function __construct(
        protected WarehouseManagementInterface $warehouseManagement
    ) {}

    public function newWarehouse(string $code): DataObject
    {
        return new DataObject($this->warehouseManagement->getWarehouseInfo($code));
    }
}