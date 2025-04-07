<?php

namespace App\Services\Contracts;

// use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection;

Interface TableDisplayServiceInterface
{
    public function setHeaders(array $tableHeaders, string $tableName): self;
    public function getHeaders(): array;
    public function addAction(string $label, string $type, string $url, array|null $options = []): array;
    public function generateTable(array $headers, array $data, array $opions = []);
    public function setData(Collection|array $data): self;
    public function getData(): Collection|array;
    public function render(): Collection|array;

}

