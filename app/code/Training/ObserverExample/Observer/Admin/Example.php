<?php

declare(strict_types=1);

namespace Training\ObserverExample\Observer\Admin;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Training\ObserverExample\Logger\Logger;

class Example implements ObserverInterface
{
    public function __construct(protected Logger $logger) {}

    public function execute (Observer $observer)
    {
        $this->logger->info('Event Triggered in adminhtml scope');
    }
}