<?php

declare(strict_types=1);

namespace Training\Preferences\Model;

use Training\Preferences\Api\Data\ItemInterface;
use Training\Preferences\Api\ItemRepositoryInterface;
use Training\Preferences\Api\Data\ItemInterfaceFactory;


class Itemrepository implements ItemRepositoryInterface
{
   // protected ItemInterfaceFactory $itemInterfaceFactory;

    public function __construct(protected ItemInterfaceFactory $itemFactory)
    {

    }

    public function newItem(string $code): ItemInterface
    {
        return $this->itemFactory->create()->setcode($code);
    }
}