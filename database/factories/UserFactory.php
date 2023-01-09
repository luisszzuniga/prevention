<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'lastname' => fake()->name(),
            'firstname' => fake()->firstName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone' => fake()->unique()->numberBetween(1, 9999999999),
            'address' => fake()->text(50),
            'zip_code' => fake()->numberBetween(1, 99999),
            'town' => fake()->text(35),
            'company_id' => Company::factory(1)->create()->first()->getAttribute("id"),
            'user_id_trainer' => fake()->unique()->numberBetween(10, 200),
            'user_id_learner' => fake()->unique()->numberBetween(10, 200),
            'role_id' => Role::factory(1)->create()->first()->getAttribute("id")
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
