<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Training\OverrideObserver\Observer;

use Magento\Customer\Model\AuthenticationInterface;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

/**
 * Class CustomerLoginSuccessObserver
 */
class CustomerLoginSuccessObserver implements ObserverInterface
{
    /**
     * Authentication
     *
     * @var AuthenticationInterface
     */
    // protected $authentication;

    /**
     * @param AuthenticationInterface $authentication
     */
    public function __construct(
        protected AuthenticationInterface $authentication,
        protected LoggerInterface $logger
    ) {
        $this->authentication = $authentication;
    }

    /**
     * Unlock customer on success login attempt.
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Customer\Model\Customer $customer */
        $customer = $observer->getEvent()->getData('model');
        $this->authentication->unlock($customer->getId());
        $this->logger->info('Unlock customer with id '.$customer->getId());
        return $this;
    }
}
