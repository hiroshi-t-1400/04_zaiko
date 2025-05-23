<?php

namespace App\Repositories\Implementations;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Constracts\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    /**
     * 商品全件取得
     *
     * @return Collection|null
     */
    public function getAll(): Collection
    {
        return Item::all();
    }

    /**
     * idで商品を取得
     *
     * @param [type] $id
     * @return Item|null
     */
    public function getById($id): ?Item // ? はnullable
    {
        return Item::find($id);
    }

    /**
     * レコードを追加
     *
     * @return Item
     */
    public function store(array $item): Item
    {
        return Item::create($item);
    }

    /**
     * レコード修正
     *
     * @param array $itemData
     * @return int
     * @throws \InvaildArgumentException $itemにidキーがない場合
     */
    public function modify(int $id, array $updateValues): int
    {
        if (empty($updateValues)) {
            return 0; // nothig is updated
        }

        return Item::where('id', $id)->update($updateValues);
    }

    /**
     * レコード削除
     *
     * @param [type] $id
     * @return boolean
     */
    public function remove($id): bool
    {
        return Item::destroy($id);
    }

    /**
     * レコードの複数削除
     *
     * @param [type] $ids
     * @return boolean
     */
    public function removeMultiple($ids): int|bool
    {
        // where('') idカラムから$idsを抽出し、deleteメソッドを実行
        return Item::where('id', $ids)->delete();
    }


}

