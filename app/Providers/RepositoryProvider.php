<?php

namespace App\Providers;

use App\Interfaces\AbilityRepository;
use App\Models\Ability;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider implements  AbilityRepository
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function getAbilities(\Illuminate\Contracts\Auth\Authenticatable $user)
    {
        $abilities = Ability::where($user->role_id, 'role_id')->get();
        return $abilities;
    }
}
