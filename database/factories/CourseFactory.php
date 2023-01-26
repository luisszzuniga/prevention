<?php

namespace Database\Factories;


use App\Models\Center;
use App\Models\Model;
use App\Models\Offer;
use App\Models\Training;
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
        $trainingId = Training::factory()->create()->first()->getAttribute('id');

        return [
            'observation' => fake()->text(),
            'training_id' => $trainingId
        ];
    }
}
