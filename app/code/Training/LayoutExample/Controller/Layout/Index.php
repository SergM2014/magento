<?php

declare(strict_types=1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    public function __construct(private PageFactory $resultFactory){}

    public function execute()
    {
        return $this->resultFactory->create();
    }
}