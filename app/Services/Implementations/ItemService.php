<?php

namespace App\Services\Implementations;

use App\Models\Item;
use App\Services\Contracts\ItemServiceInterface;
use App\Repositories\Constracts\ItemRepositoryInterface;


class ItemService implements ItemServiceInterface
{

    // protected $itemRepository;

    /**
     * クラス内でのみ参照されるItemRepositoryInterfaceインスタンスを生成する
     *
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
