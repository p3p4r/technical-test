<?php

namespace Database\Seeders;

use App\Enums\FarmsStatuses;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};

class FarmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farms')->insert(
            [
                'status' => FarmsStatuses::ACTIVE,
                'name' => Str::random(10),
                'country' => Str::random(10),
                'address' => Str::random(50),
                'coordinates' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'status' => FarmsStatuses::ACTIVE,
                'name' => Str::random(10),
                'country' => Str::random(10),
                'address' => Str::random(50),
                'coordinates' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'status' => FarmsStatuses::DISABLED,
                'name' => Str::random(10),
                'country' => Str::random(10),
                'address' => Str::random(50),
                'coordinates' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        );
    }
}
