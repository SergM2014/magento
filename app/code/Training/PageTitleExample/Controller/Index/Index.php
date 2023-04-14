<?php

declare(strict_types=1);

namespace Training\PageTitleExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(private PageFactory $pageFactory) {}

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Page Title Example');
        $page->getLayout()->getBlock('page.main.title')->setPageTitle('magento 2 training set from controller');
        return $page;
    }
}