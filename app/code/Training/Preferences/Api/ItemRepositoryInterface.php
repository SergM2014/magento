<?php

declare(strict_types=1);

namespace Training\Preferences\Api;

use Training\Preferences\Api\Data\Iteminterface;

interface ItemRepositoryInterface
{
    public function newItem(string $code): ItemInterface;
}