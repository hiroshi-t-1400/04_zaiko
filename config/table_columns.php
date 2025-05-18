
<?php

return [
    'items' => [
        'id' => ['label' => 'ID', 'type' => 'text'],
        'name_ja' => ['label' => '商品名', 'type' => 'text'],
        'quantity' => ['label' => '数量', 'type' => 'text'],
        'unit_of_measure' => ['label' => '単位', 'type' => 'text'],
        'buy_date' => ['label' => '購入日', 'type' => 'date'],
        'price' => ['label' => '価格(円)', 'type' => 'text'],
        'category_id' => ['label' => 'カテゴリー', 'type' => 'select'],
        'name_en' => ['label' => '商品名(英語)', 'type' => 'text'],
        'reorder_point' => ['label' => '買い足し閾値', 'type' => 'number'],
        'safety_stock' => ['label' => '最低バッファ', 'type' => 'number'],
        'description_ja' => ['label' => '説明', 'type' => 'textarea'],
    ],
    'users' => [
        'name' => ['label' => '名前', 'type' => 'text'],
        'email' => ['label' => 'メールアドレス', 'type' => 'email'],
        'password' => ['label' => 'パスワード', 'type' => 'password'],
    ],
];
