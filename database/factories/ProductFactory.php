<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "description" => $this->faker->sentence(),
            "price" => $this->faker->numberBetween(1, 500),
            "image_id" => $this->faker->numberBetween(1, 5),
            "product_options_group_id" => $this->faker->numberBetween(1, 5),
            "category_id" => $this->faker->numberBetween(1, 5),
        ];
    }
}
