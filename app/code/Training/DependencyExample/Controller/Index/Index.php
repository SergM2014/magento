<?php

declare(strict_types=1);

namespace Training\DependencyExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(private PageFactory $pageFactory) {}

    public function execute()
    {
        $page =  $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Dependency injection in magento2');
        
        return $page;
    }
}
