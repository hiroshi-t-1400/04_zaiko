<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as BaseCollection;


Interface FormDisplayServiceInterface
{
    public function setDisplayInfo (array $columns, string $tableName): BaseCollection|array;
    public function getDisplayInfo (): BaseCollection|array;
    public function setSelectForm (string $name): array;
}

