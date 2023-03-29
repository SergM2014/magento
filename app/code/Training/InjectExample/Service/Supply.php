<?php

declare(strict_types=1);

namespace Training\InjectExample\Service;

use Training\InjectExample\Model\Supplier;
use Training\InjectExample\Model\Item;
use Training\InjectExample\Model\ItemFactory;

class Supply
{
    public function __construct(
        protected Supplier $supplier,
        protected ItemFactory $itemFactory
        ) {}

    public function getSupplier(): Supplier
    {
        $this->supplier->setCode('123ABC');
        return $this->supplier;
    }

    public function getItem(): Item
    {
        $item = $this->itemFactory->create();
        $item->setCode('item: 246');
        return $item;
    }
}