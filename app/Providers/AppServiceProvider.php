<?php

namespace App\Providers;

use App\Repositories\SuportRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use SuportEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            SuportRepositoryInterface::class,
            SuportEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
