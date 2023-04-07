<?php

declare(strict_types=1);

namespace Training\PluginExample\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\PluginExample\Model\ProductKey;
use Magento\Catalog\Api\ProductRepositoryInterface;

class Example implements ArgumentInterface
{
    public function __construct(
        protected ProductKey $productKey,
        protected ProductRepositoryInterface $productRepository
    ) {}

    public function getProductKey(RequestInterface $request): ?string
    {
        $productId = $request->getParam('product_id');
        if (null !== $productId) {
            $product = $this->productRepository->getById($productId);

            return $this->productKey->getKey($product, 'Product');
        }

        return null;
    }
}