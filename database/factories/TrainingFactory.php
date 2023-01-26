<?php

namespace Database\Factories;


use App\Models\Center;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Model>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'seance_code' => fake()->unique()->numberBetween(1, 1000),
            'offer_id' => Offer::factory(1)->create()->first(),
            'center_id' => Center::factory(1)->create()->first(),
            'user_id_trainer' => User::factory(1)->create()->first()->getAttribute('id'),
            'user_id_learner' => User::factory(1)->create()->first()->getAttribute('id'),
            'date' => fake()->date()
        ];
    }
}
