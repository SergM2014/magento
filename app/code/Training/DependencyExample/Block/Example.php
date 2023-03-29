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


declare(strict_types=1);

namespace Namespace\Module\Block;

use Magento\Framework\View\Element\Template;

use Magento\Framework\View\Element\Template\Context;

use Namespace\Module\Model\SomeClass

class Example implements Template
{
    public function __construct(
        Context $context,//compulsory
        protected SomeClass $someClass //Class that should be inserted  into block workflow
        array $data = []//compulsory
    )

    {
        parent::__construct(context, data);
    }

    public function getSomeСlass(): SomeClass
    {
        return $this->SomeClass;
    }
}
