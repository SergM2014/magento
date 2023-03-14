<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{
    public function __construct(protected PageFactory $pageFactory)
    {}

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Example');

        return $page;
    }
}