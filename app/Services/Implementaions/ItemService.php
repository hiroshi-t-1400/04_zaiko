<?php

namespace App\Services\Implementaions;

use App\Models\Item;
use App\Services\Contracts\ItemServiceInterface;
use App\Repository\Constracts\ItemRepositoryInterface;


class ItemService implements ItemServiceInterface
{

    // protected $itemRepository;

    /**
     * より厳密に$itemRepositoryを定義？
     *
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(
        private readonly ItemRepositoryInterface $itemRepository
    ) {}



    // public function getAll(): Collection
    // {
    //     return $this->itemRepository->getAll();
    // }

    public function store (array $item): Item
    {
        return $this->itemRepository->store($item);
    }

}
