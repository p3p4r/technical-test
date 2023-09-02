<?php

namespace Database\Factories;

use App\Enums\TurbineStatuses;
use App\Models\Turbine;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'turbine_id' => $this->faker->randomElement(Turbine::pluck('id')),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'inspection_date' => now(),
            'notes' => $this->faker->text,
            'status' => $this->faker->randomElement(TurbineStatuses::cases()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
