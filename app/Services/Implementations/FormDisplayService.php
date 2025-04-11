<?php

namespace App\Services\Implementations;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as BaseCollection;
use App\Services\Contracts\FormDisplayServiceInterface;

class FormDisplayService implements FormDisplayServiceInterface
{
    private string $tabelName;
    private array|BaseCollection $formType;
    private array $columns;
    private array|BaseCollection $displayInfo;

    public function __construct(){}

    public function setDisplayInfo(array $columns, string $tableName): BaseCollection|array
    {
        $this->columns = $columns;
        $this->tableName = $tableName;

        $this->displayInfo = collect($columns)
            ->map( function($column) {
                $type = config("table_columns.{$this->tableName}.{$column}.type", 'text');
                $formType = $type;

                if ($type === 'select') {
                    $formType = ['select' => $this->setSelectForm($column)];
                }

                return [
                    'column' => $column,
                    'displayName' => config("table_columns.{$this->tableName}.{$column}.label", $column),
                    'formType' => $formType,
                ];
            });

        return $this->displayInfo;
    }

    public function setSelectForm (string $name): array
    {
        $dummy = [
            'category_id' => [
                1 => '食品',
                2 => '文房具',
                3 => '衛生用品',
                4 => 'その他',
            ],
        ];

        return $dummy[$name];
        // todo カラムに応じてドロップダウンのリストを取得する
        // ex)category_idはカテゴリテーブルを設けるのでカテゴリテーブルノフィールドバリューを全て取得する？
    }

    public function getDisplayInfo(): BaseCollection|array
    {
        return $this->displayInfo;
    }
}
