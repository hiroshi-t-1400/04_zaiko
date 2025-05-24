<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class initItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        Category::insert([
            [
                'name' => '食品',
            ],
            [
                'name' => '文房具',
            ],
            [
                'name' => '衛生用品',
            ],
            [
                'name' => 'その他',
            ],
        ]);
    }
}
