<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface
{
    public function __construct(protected JsonFactory $jsonFactory) 
    {}

    public function execute()
    {
        return $this->jsonFactory->create()
            //->setHeader('content-Type', 'application/json')
            ->setData([
                'name' => 'Ich bin',
                'job' => 'Magento Developer'
            ]);
    }
}