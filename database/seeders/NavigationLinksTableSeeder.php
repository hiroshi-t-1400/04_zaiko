<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NavigationLink;


class NavigationLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        NavigationLink::truncate();

        NavigationLink::create([
            'label' => '商品一覧',
            'route_name' => 'items.index',
            'order' => '1',
        ]);

        NavigationLink::create([
                'label' => '商品登録画面',
                'route_name' => 'items.create',
                'order' => '2',
        ]);


    }
}
