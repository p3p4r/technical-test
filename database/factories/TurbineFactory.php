<?php

namespace Database\Factories;

use App\Enums\TurbineStatuses;
use App\Models\Farm;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turbine>
 */
class TurbineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'farm_id' => $this->faker->randomElement(Farm::pluck('id')),
            'name' => $this->faker->word,
            'description' => Str::random(50),
            'install_date' =>  now(),
            'status' => $this->faker->randomElement(TurbineStatuses::cases()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
