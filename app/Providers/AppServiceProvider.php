<?php

namespace App\Providers;

use App\Http\Repository\CustomerRepositoryInterface;
use App\Http\Repository\eloquent\CustomerRepository;
use App\Http\Service\CustomerServiceInterface;
use App\Http\Service\implement\CustomerService;
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
        $this->app->singleton(CustomerServiceInterface::class,CustomerService::class);
        $this->app->singleton(CustomerRepositoryInterface::class,CustomerRepository::class);
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
