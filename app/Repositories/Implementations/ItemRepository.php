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
    // public function getById($id): ?Item
    // {
    //     return Item::find($id);
    // }

    /**
     *idで商品を取得 FindOrFail
     *
     * @param [type] $id
     * @return Item
     */
    // public function getByIdOrFail($id): Item
    // {
    //     return Item::findOrFail($id);
    // }

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
     * @return Item|false
     */
    // public function modify(): Item|false
    // {
    //     return false;
    // }

    /**
     * レコード削除
     *
     * @param [type] $id
     * @return boolean
     */
    // public function remove($id): bool
    // {
    //     return Item::destroy($id);
    // }

    /**
     * レコードの複数削除
     *
     * @param [type] $ids
     * @return boolean
     */
    // public function removeMultiple($ids): bool
    // {
    //     // where('') idカラムから$idsを抽出し、deleteメソッドを実行
    //     return Item::where('id', $ids)->delete();
    // }


}

