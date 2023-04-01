<?php

declare(strict_types=1);

namespace Training\ProxyExample\Model;

use Training\ProxyExample\Model\FeaturedProducts\FeaturedByCategory;
use Training\ProxyExample\Model\FeaturedProducts\FeaturedBySales;

class FeaturedProducts
{
    public function __construct(
        protected FeaturedByCategory $featuredByCategory,
        protected FeaturedBySales $featuredBySales
    ) {}

    public function getFeaturedProducts(): array
    {
        if ($this->featuredByCategory->count() < 6) {
            return $this->featuredBySales->getFeaturedProducts();
        }

        return $this->featuredByCategory->getFeaturedProducts();
    }
}