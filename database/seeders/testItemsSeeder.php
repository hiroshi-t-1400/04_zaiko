<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class testItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->truncate();

        Item::insert([
            [
                'name_ja' => 'たまご',
                'name_en' => 'egg',
                'quantity' => 10,
                'unit_of_measure' => 'パック',
                'category_id' => 1,
                'price' => 280,
                'buy_date' => '2025-05-19-00:00:00',
                'reorder_point' => 3,
                'safety_stock' => 2,
                'description_ja' => 'おいしいたまご',
            ],
            [
                'name_ja' => 'ゴミ袋',
                'name_en' => 'garbage bag',
                'quantity' => 2,
                'unit_of_measure' => '袋',
                'category_id' => 4,
                'price' => 120,
                'buy_date' => '2025-05-19-00:00:00',
                'reorder_point' => 1,
                'safety_stock' => 1,
                'description_ja' => '市の指定ゴミ袋',
            ],
            [
                'name_ja' => 'ふりかけ',
                'name_en' => 'source',
                'quantity' => 3,
                'unit_of_measure' => '袋',
                'category_id' => 1,
                'price' => 120,
                'buy_date' => '2025-05-20-00:00:00',
                'reorder_point' => 1,
                'safety_stock' => 1,
                'description_ja' => '永谷園のやつ',
            ],
            [
                'name_ja' => '風呂掃除用洗剤',
                'name_en' => 'bath clean spray',
                'quantity' => 1,
                'unit_of_measure' => '本',
                'category_id' => 3,
                'price' => 180,
                'buy_date' => '2025-05-20-00:00:00',
                'reorder_point' => 1,
                'safety_stock' => 1,
                'description_ja' => 'バスマジックリン',
            ],
        ]);
    }
}
