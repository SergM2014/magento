<?php

declare(strict_types=1);

namespace Training\widgetExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(private PageFactory $pageFactory) {}

    public function execute()
    {
        return $this->pageFactory->create();
    }
}