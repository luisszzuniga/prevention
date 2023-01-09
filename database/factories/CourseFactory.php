<?php

namespace Database\Factories;


use App\Models\Model;
use App\Models\Offer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'center_acp_name' => fake()->name(),
            'observation' => fake()->text(),
            'seance_code' => fake()->unique()->numberBetween(1, 1000),
            'offer_id' => Offer::factory(1)->create()->first(),
            'vehicle_id' => Vehicle::factory(1)->create()->first(),
            'user_id_trainer' => User::factory(1)->create()->first()->getAttribute('id'),
            'user_id_learner' => User::factory(1)->create()->first()->getAttribute('id')
        ];
    }
}
