<?php

namespace App\Services\Contracts;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

Interface ItemServiceInterface
{
    public function getAll(): Collection; // 商品を全件取得
    public function getById($id): ?Item; // 商品を一件取得
    public function store(array $item): Item; // 商品を登録
    public function modify($id): bool; // 商品の編集
    public function remove($id): bool; // 商品の削除
    public function removeMultiple(array $ids): int|bool; // 商品の複数削除

}

