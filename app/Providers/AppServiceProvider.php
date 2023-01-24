<?php

namespace App\Providers;

use App\Interfaces\AbilityRepository as InterfaceAbilityRepository;
use App\Interfaces\AbilityService as InterfaceAbilityService;
use App\Interfaces\CompanyInterface;
use App\Interfaces\OfferInterface;
use App\Interfaces\TrainerInterface;
use App\Providers\AbilityProvider as AbilityServiceProvider;
use App\Providers\RepositoryProvider as AbilityRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\OfferRepository;
use App\Repositories\TrainerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InterfaceAbilityService::class, AbilityServiceProvider::class);
        $this->app->bind(InterfaceAbilityRepository::class, AbilityRepository::class);
        $this->app->bind(OfferInterface::class, OfferRepository::class);
        $this->app->bind(TrainerInterface::class, TrainerRepository::class);
        $this->app->bind(CompanyInterface::class, CompanyRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
