<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Service;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Training\ConsoleExample\Model\ProductKey;

class Example
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository,
        protected ProductKey $productKey
    )
    {}

    public function getProductKey(int $productId, string $productPrefix): string
    {
        $product = $this->productRepository->getById((int) $productId);

        return $this->productKey->getKey($product, $productPrefix);
    }
}