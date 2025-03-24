<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name_ja' => fake()->word(),
            'name_en' => fake('en_US')->word(),
            'quantity' => rand(0, 1000),
            'unit_of_measure' => rand(1,4),
            'category_id' => rand(1, 4),
            'price' => rand(0, 1000000),
            'buy_date' => fake()->dateTimeThisMonth(),
            'reorder_point' => $reoder_point = rand(5, 20),
            'safety_stock' => $reoder_point,
            'description_ja' => fake()->word(),
            'img_path' => fake()->imageUrl(),
            'like_count' => rand(0, 4),



        ];
    }
}
