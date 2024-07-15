<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_id"=>Product::factory(),
            "offer"=> fake()->word(2),
            "price"=> rand(1000,10000),
            "sale_price"=> rand(0,1)?null:900
        ];
    }
}
