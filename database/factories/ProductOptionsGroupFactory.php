<?php

namespace Database\Factories;

use App\Models\ProductOptionsGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductOptionsGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductOptionsGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => $this->faker->numberBetween(1, 5),
            "options_group_id" => $this->faker->numberBetween(1, 5),
        ];
    }
}
