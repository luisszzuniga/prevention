<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyId = Company::factory()->create()->first()->getAttribute("id");
        DB::table('users')->insert([
            'id' => 1000,
            'lastname' => 'rousseau',
            'firstname' => 'maxime',
            'email' => 'maxime.rousseau99@gmail.com',
            'phone' => '0781726621',
            'password' => bcrypt('password'),
            'address' => '19 la croix quinquis',
            'zip_code' => '22290',
            'town' => 'pleguien',
            'company_id' => $companyId,
            'user_id_trainer' => fake()->numberBetween(10, 100),
            'user_id_learner' => fake()->numberBetween(10, 100),
            'role_id' => 1,
            'remember_token' => Str::random(10)
        ]);


    }
}
