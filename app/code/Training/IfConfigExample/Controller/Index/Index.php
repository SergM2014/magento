<?php

declare(strict_types=1);

namespace Training\IfConfigExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(private PageFactory $pageFactory) {}

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('IfConfig Example');
        return $page;
    }
}