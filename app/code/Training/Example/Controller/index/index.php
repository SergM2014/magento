<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface
{
    protected $resultFactory;
    public function __construct(RawFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        return $this->resultFactory->create()
            ->setHeader('content-Type', 'text/xml')
            ->setContents('<root><name>Serhii Muzura</name><job>Magento developer</job></root>');
    }
}