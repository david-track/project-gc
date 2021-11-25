<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\GroupName::factory(5)->create();
        \App\Models\Image::factory(5)->create();
        \App\Models\OptionsGroup::factory(5)->create();
        \App\Models\Product::factory(5)->create();
        \App\Models\ProductOption::factory(5)->create();
        \App\Models\ProductOptionsGroup::factory(5)->create();
    }
}
