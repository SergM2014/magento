<?php

declare(strict_types=1);

namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Training\DependencyExample\Model\Main;

class Example extends Template
{
    public function __construct(
        Context $context,
        protected Main $main,
        array $data = []
    )

    {
        parent::__construct($context, $data);
    }

    public function getMain(): Main
    {
        return $this->main;
    }
}