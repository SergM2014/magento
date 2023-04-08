<?php

declare(strict_types=1);

namespace Training\DispatchEventExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
        protected ManagerInterface $eventManager
    ) {}

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Dispatch Event Example');

        $this->eventManager->dispatch('dispatch_event_example', ['page' => $page]);

        return $page;
    }
}