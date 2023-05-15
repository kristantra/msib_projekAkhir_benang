<?php

namespace Database\Factories;

use App\Models\FabricType;
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
    public function definition()
    {
        return [
            'fabric_type_id' => FabricType::factory(),
            'name' => $this->faker->word,
            'color' => $this->faker->safeColorName,
            'color_code' => $this->faker->hexcolor,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'quantity_kg' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
