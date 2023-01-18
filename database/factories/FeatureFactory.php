<?php

namespace Database\Factories;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       $offerId = Offer::factory()->create()->first()->getAttribute('id');

        return [
            'text'=> fake()->realTextBetween(1, 50),
                'offer_id' => $offerId
        ];
    }
}
