<?php

declare(strict_types=1);

namespace Training\InjectExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\InjectExample\Service\Demand;
use Training\InjectExample\Service\Supply;

class Example implements ArgumentInterface
{
    public function __construct(
        protected Supply $supply,
        protected Demand $demand
        ) {}

    public function getSupply(): Supply
    {
        return $this->supply;
    }

    public function getDemand(): Demand
    {
        return $this->demand;
    }
}