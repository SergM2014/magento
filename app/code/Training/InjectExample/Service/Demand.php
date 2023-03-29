<?php

declare(strict_types=1);

namespace Training\InjectExample\Service;

use Training\InjectExample\Model\Item;
use Training\InjectExample\Model\ItemFactory;
use Training\InjectExample\Model\Supplier;

class Demand
{
    public function __construct(
         protected Supplier $supplier,
         protected ItemFactory $itemFactory,
    ) {}

    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }

    public function getItem(): Item
    {
        return $this->itemFactory->create();
    }
}