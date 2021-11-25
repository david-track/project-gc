<?php

namespace Database\Seeders;

use App\Models\OptionsGroup;
use Illuminate\Database\Seeder;

class OptionsGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add factory to this seeder, Modelname::factory()->times(amount)->create();
        OptionsGroup::factory()
            ->times(5)
            ->create();
    }
}
