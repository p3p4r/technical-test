<?php

namespace Database\Seeders;

use App\Models\TurbineComponent;
use Illuminate\Database\Seeder;

class TurbinesComponentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TurbineComponent::factory(15)->create();
    }
}
