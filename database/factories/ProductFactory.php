<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->unique()->sentence();
        $slug = Str::slug($name);
        return [
            'name' =>  $name,
            'slug' => $slug,
            'sku' => $this->faker->realText($maxNbChars = 16),
            'description' => $this->faker->text(),
            'discount' => $this->faker->numberBetween(0, 1),
            'published' => $this->faker->numberBetween(0, 1),
            'image_path' => $this->faker->imageUrl(640, 640),
            'price' => 0.25,
            'sizes' => [],
        ];
    }
}
