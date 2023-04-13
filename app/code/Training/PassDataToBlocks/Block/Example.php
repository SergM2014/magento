<?php

declare(strict_types=1);

namespace Training\PassDataToBlocks\Block;

use Magento\Framework\View\Element\Template;

use Magento\Framework\View\Element\Template\Context;

class Example extends Template
{
   public function getDummyName(): string
   {
        return 'dumdumdum';
   }
}