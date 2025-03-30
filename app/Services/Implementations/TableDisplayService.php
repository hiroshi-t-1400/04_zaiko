<?php

namespace App\Services\Implementations;

use App\Services\Contracts\TableDisplayServiceInterface;

class TableDisplayService implements TableDisplayServiceInterface
{

    private array $tableHeaders = []; // ヘッダー情報を格納するプロパティ配列
    private string $tableName = ''; // どのテーブルかを示すプロパティ

    public function __construct() {

    }

    /**
     * テーブルのヘッダー名を設定します
     *
     * @param array $columns
     * @param string $tableName
     * @return self
     */
    // 機能: テーブルのヘッダー（列名）を設定します。
    // 引数: $tableHeaders - ヘッダーのラベルを格納した配列（例：['ID', '商品名', '価格', '在庫数']）。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: テーブルの列名を動的に変更したい場合に使用します。
    public function setHeaders(array $columns, string $tableName): self
    {
        $this->tableName = $tableName;
        $this->tableHeaders = collect($columns)
            ->map( function ($column) {
                $displayName = config("table_columns.{$this->tableName}.{$column}", $column);
                return [
                    'column' => $column,
                    'displayName' => $displayName,
                ];
            })
            ->toArray();

        return $this;
    }

    /**
     * ヘッダー情報を返す
     *
     * @return array
     */
    // getData(): Collection|array
    // 機能: 現在設定されているデータを取得します。
    // 戻り値: EloquentのCollectionまたはデータの配列。
    public function getHeaders(): array
    {
        return $this->tableHeaders;
    }

    // setData(Collection|array $data): self
    // 機能: テーブルに表示するデータを設定します。
    // 引数: $data - EloquentのCollectionまたはデータの配列。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: データベースから取得したデータや、他のサービスから取得したデータを設定します。
    // addColumn(string $key, string $label, callable $callback = null): self

    // 機能: テーブルに新しい列を追加します。
    // 引数:
    // $key - データ配列内のキー名（例：'name'）。
    // $label - 列のヘッダーラベル（例：'商品名'）。
    // $callback - (オプション) 各行のデータに対して実行するコールバック関数。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: 既存のデータから新しい列を生成したり、データのフォーマットを変更したりする場合に使用します。コールバック関数は、各行のデータを受け取り、表示する値を返すように実装します。
    // removeColumn(string $key): self

    // 機能: 指定されたキーの列を削除します。
    // 引数: $key - 削除する列のキー名。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: 不要な列を非表示にするために使用します。
    // setColumnOrder(array $order): self

    // 機能: 列の表示順序を設定します。
    // 引数: $order - 列のキー名を順序通りに並べた配列。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: 列の表示順序をカスタマイズするために使用します。
    // setPagination(int $perPage = 10): self

    // 機能: ページネーションの設定を行います。
    // 引数: $perPage - 1ページあたりの表示件数。
    // 戻り値: $this (メソッドチェーンを可能にするため)。
    // 説明: 大量のデータを扱う場合に、ページネーションを適用します。
    // getHeaders(): array

    // 機能: 現在設定されているヘッダーを取得します。
    // 戻り値: ヘッダーのラベルを格納した配列。
    // 説明: 設定されたヘッダー情報を取得するために使用します。

    // render(): array
    // 機能: 設定されたヘッダーとデータを、ビューで表示可能な形式に変換して返します。
    // 戻り値: ヘッダーとデータを格納した配列（例：['tableHeaders' => [...], 'data' => [...]]）。
    // 説明: ビューに渡す最終的なデータを生成します。
    // addActionButton(string $label, string $url, string $method = 'GET', array $attributes = []): self

    // 機能: 各行にアクションボタンを追加します。
    // 引数:
    // $label: ボタンのラベル
    // $url: ボタンのリンク先URL
    // $method: HTTPメソッド（GET, POST, DELETEなど）
    // $attributes: HTML属性の配列
    // 戻り値: $this
    // 説明: 各行に編集、削除などのボタンを追加します。
    // addBulkAction(string $label, string $url, string $method = 'POST', array $attributes = []): self

    // 機能: 複数行に対して一括操作を行うためのボタンを追加します。
    // 引数:
    // $label: ボタンのラベル
    // $url: ボタンのリンク先URL
    // $method: HTTPメソッド（GET, POST, DELETEなど）
    // $attributes: HTML属性の配列
    // 戻り値: $this
    // 説明: 複数選択された行に対して、一括削除などの操作を行うためのボタンを追加します。

}
