<?php

namespace App\Repositories\Constracts;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

Interface ItemRepositoryInterface
{
    public function getAll(): Collection; // 全件取得
    public function getById($id): ?Item; // idで取得
    public function store(array $item): Item; // レコード追加
    public function modify(int $id, array $updateValues): int; // レコード修正
    public function remove($id): bool; // レコード削除
    public function removeMultiple(array $ids): int|bool; // 複数レコード削除
}

