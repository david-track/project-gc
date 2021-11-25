<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add factory to this seeder, Modelname::factory()->times(amount)->create();
        Product::factory()
            ->times(5)
            ->create();
    }
}
