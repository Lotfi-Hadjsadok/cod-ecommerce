<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

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

        $title = fake()->word(1);
        return [
           'title' =>  $title,
           'slug' =>  $title,
           'price' => 2500,
           'sale_price'=>rand(0, 1) ? null : 2000,
           'thumbnail'=>"https://picsum.photos/seed/".rand(1,1000)."/1000/1000",
           'images'=>json_encode(["https://picsum.photos/seed/".rand(1000,9999)."/1000/1000","https://picsum.photos/seed/".rand(1000,9999)."/1000/1000","https://picsum.photos/seed/".rand(1000,9999)."/1000/1000"])
        ];
    }
}
