<?php

namespace Database\Seeders;

use App\Models\GroupName;
use Illuminate\Database\Seeder;

class GroupNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add factory to this seeder, Modelname::factory()->times(amount)->create();
        GroupName::factory()
            ->times(5)
            ->create();
    }
}
