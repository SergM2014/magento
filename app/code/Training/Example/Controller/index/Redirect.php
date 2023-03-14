<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect implements ActionInterface
{
    public function __construct(protected RedirectFactory $redirectFactory)
    {}

    public function execute()
    {
        return $this->redirectFactory->create()->setUrl('/example/index/page');
    }
}