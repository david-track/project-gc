<?php

namespace Database\Seeders;

use App\Models\ProductOptionsGroup;
use Illuminate\Database\Seeder;

class ProductOptionsGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add factory to this seeder, Modelname::factory()->times(amount)->create();
        ProductOptionsGroup::factory()
            ->times(5)
            ->create();
    }
}
