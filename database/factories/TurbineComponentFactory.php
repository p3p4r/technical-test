<?php

namespace Database\Factories;

use App\Models\{
    Component,
    Grade,
    Turbine
};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TurbineComponentFactory extends Factory
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
            'component_id' => $this->faker->randomElement(Component::pluck('id')),
            'grade_id' => $this->faker->randomElement(Grade::pluck('id')),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
