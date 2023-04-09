<?php

declare(strict_types=1);

namespace Training\MuteObserverExample\Model;

use Magento\Framework\DataObject;
use Magento\Framework\Event\ManagerInterface;

class DeliveryTypes
{
    public function __construct(protected ManagerInterface $eventManager) {} 

    public function toDataObject(): DataObject
    {
        $types = new DataObject([
            'types' => [
                'same_day',
                'next_day',
            ]
        ]);

        $this->eventManager->dispatch('delivery_type_list', ['types' => $types]);

        return $types;
    }
}