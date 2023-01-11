<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ProgressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => fake()->text,
            'theme_id' => Theme::factory(1)->create()->first()->getAttribute("id"),
        ];
    }
}
