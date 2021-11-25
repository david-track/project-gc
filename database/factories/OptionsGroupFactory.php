<?php

namespace Database\Factories;

use App\Models\OptionsGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class OptionsGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OptionsGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_option_id" => $this->faker->numberBetween(1, 5),
            "group_name_id" => $this->faker->numberBetween(1, 5),
        ];
    }
}
