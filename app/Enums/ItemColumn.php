<?php

namespace App\Enums;

enum ItemColumn: string
{
    // Backed Enum
    // ItemColumn：列挙型名
    // NAME_JA：ケース名
    // スカラー値
    case NAME_JA = "name_ja";
    case NAME_EN = "name_en";
    case QUANTITY = "quantity";
    case UNIT_OF_MEASURE = "unit_of_measure";
    case CATEGORY_ID = "category_id";
    case PRICE = "price";
    case BUY_DATE = "buy_date";
    case REORDER_POINT = "reorder_point";
    case SAFETY_STOCK = "safety_stock";
    case DESCRIPTION_JA = "description_ja";
    case IMG_PATH = "img_path";
    case LIKE_COUNT ="like_count";

    /**
     * displayNameを関連づける
     *
     * @return string
     */
    public function displayName (): string
    {
        return match($this) {
            self::NAME_JA => "名前(日本語)",
            self::NAME_EN => "名前(英語)",
            self::QUANTITY => "数量",
            self::UNIT_OF_MEASURE => "単位",
            self::CATEGORY_ID => "カテゴリー",
            self::PRICE => "価格",
            self::BUY_DATE => "購入日",
            self::REORDER_POINT => "補充目安",
            self::SAFETY_STOCK => "在庫の下限",
            self::DESCRIPTION_JA => "商品説明",
            self::IMG_PATH => "画像パス",
            self::LIKE_COUNT => "お気に入り度",
        };

    }
}


