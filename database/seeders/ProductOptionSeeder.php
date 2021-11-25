<?php

namespace Database\Seeders;

use App\Models\ProductOption;
use Illuminate\Database\Seeder;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add factory to this seeder, Modelname::factory()->times(amount)->create();
        ProductOption::factory()
            ->times(5)
            ->create();
    }
}
