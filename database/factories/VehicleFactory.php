<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $learnerId = User::factory()->create()->first()->getAttribute('id');

        return [
            'name' => fake()->text(10),
            'brand' => fake()->text(8),
            'license_plate' => fake()->text(10),
            'type' => fake()->text(20),
            'learner_id' => $learnerId
        ];
    }
}
