<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CompanySeeder::class,
            OfferSeeder::class,
            VehicleSeeder::class,
            ProgressSeeder::class,
            EvaluationSeeder::class,
            ThemeSeeder::class,
            CriterionSeeder::class,
            CourseSeeder::class,
            UserSeeder::class
        ]);
    }
}
