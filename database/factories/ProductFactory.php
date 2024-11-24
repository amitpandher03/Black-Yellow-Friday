<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->randomFloat(2, 1, 100),
            'description' => fake()->text(),
            'image' => null,
            'category_id' => Category::inRandomOrder()->first()->id,
            'stock' => fake()->numberBetween(1, 100),
            'discount_percentage' => fake()->numberBetween(0, 100),
            'discounted_price' => fake()->randomFloat(2, 1, 100),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
