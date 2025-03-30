<?php

namespace App\Services\Contracts;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

Interface TableDisplayServiceInterface
{
    public function setHeaders(array $tableHeaders, string $tableName): self;
    public function getHeaders(): array;
}

