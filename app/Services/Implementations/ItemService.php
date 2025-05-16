<?php

namespace App\Services\Implementations;

use App\Models\Item;
use App\Services\Contracts\ItemServiceInterface;
use App\Repositories\Constracts\ItemRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ItemService implements ItemServiceInterface
{

    /**
     * クラス内でのみ参照されるItemRepositoryInterfaceインスタンスを生成する
     *
     *
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(
        private readonly ItemRepositoryInterface $itemRepository
    ) {}


    /**
     * 全件取得
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->itemRepository->getAll();
    }

    /**
     * IDで一件取得
     *
     * @param [type] $id
     * @return Item
     */
    public function getById($id): ?Item
    {
        return $this->itemRepository->getById($id);
    }

    /**
     * １件の商品を登録
     *
     * @param array $item
     * @return Item
     */
    public function store (array $item): Item
    {
        return $this->itemRepository->store($item);
    }

    /**
     * １件の商品を更新
     *
     * @param int $id
     * @param $updateValues
     * @return Integer
     * @throws \InvaildArgumentException $itemにidキーがない場合
     */
    public function modify(int $id, array $updateValues): int
    {
        return $this->itemRepository->modify($id, $updateValues);
    }

    /**
     * 商品を１件削除
     *
     * @param [type] $id
     * @return boolean
     */
    public function remove($id): bool
    {
        return $this->itemRepository->remove($id);
    }

    /**
     * 複数の商品を削除
     * getByIdメソッドで取得したidが渡ってくる予定
     *
     * @param array $ids
     * @return integer|boolean
     */
    public function removeMultiple(array $ids): int|bool
    {
        return $this->itemRepository->removeMultiple($ids);
    }

}
