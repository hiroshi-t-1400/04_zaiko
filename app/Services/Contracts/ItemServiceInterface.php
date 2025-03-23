<?php

namespace App\Services\Contracts;

use App\Models\Item;

Interface ItemServiceInterface
{
    // public function getAll(): Collection; // 商品を全件取得
    // public function getById($id, array $ids): Collection; // 商品を一件取得
    public function store(array $item): Item; // 商品を登録
    // public function modify($id) ; // 商品の編集
    // public function remove($id): bool; // 商品の削除
    // public function removeMultiple(array $ids): bool; // 商品の複数削除

}

