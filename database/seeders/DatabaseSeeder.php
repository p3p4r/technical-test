<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Turbine;
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
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            FarmsSeeder::class,
            GradesSeeder::class,
            TurbinesSeeder::class,
            ComponentsSeeder::class,
            TurbinesComponentsSeeder::class,
            InspectionsSeeder::class,
        ]);
    }
}
