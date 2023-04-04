<?php

declare(strict_types=1);

namespace Training\Preferences\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Preferences\Api\Data\ItemInterface;
use Training\Preferences\Api\ItemRepositoryInterface;

class Example implements ArgumentInterface
{
    public function __construct(protected ItemRepositoryInterface $itemRepository) {}

    public function getItem(RequestInterface $request): ItemInterface
    {
        return $this->itemRepository->newItem($request->getParam('code'));
    }
}