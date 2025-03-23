<?php

namespace App\Repositories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

Interface ItemRepositoryInterface
{
    // public function getAll(): Collection; // 全件取得
    // public function getById($id): ?Item; // idで取得
    // // public function getByIdOrFail($id): Item; // idで取得FindOrFail
    public function store(array $item): Item; // レコード追加
    // public function modify(): Item|false; // レコード修正
    // public function remove($id): bool; // レコード削除
    // public function removeMultiple(array $ids): bool; // 複数レコード削除
}

