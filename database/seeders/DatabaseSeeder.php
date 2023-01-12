<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Center;
use App\Models\Feature;
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
            VehicleSeeder::class,
            ProgressSeeder::class,
            EvaluationSeeder::class,
            ThemeSeeder::class,
            CriterionSeeder::class,
            CourseSeeder::class,
            UserSeeder::class,
            CenterSeeder::class,
            FeatureSeeder::class,
            OfferSeeder::class
        ]);
    }
}
