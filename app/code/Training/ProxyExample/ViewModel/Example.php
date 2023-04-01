<?php

declare(strict_types=1);

namespace Training\ProxyExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\ProxyExample\Model\FeaturedProducts;

class Example implements ArgumentInterface
{

    public function __construct(protected FeaturedProducts $featuredProducts)
    {
      
    }

    public function getFeaturedProducts(): array
    {
        return $this->featuredProducts->getFeaturedProducts();
    }


    
}