<?php

namespace App\Providers;

use App\Repositories\Impl\TaskRepositoryImpl;
use App\Repositories\TaskRepository;
use App\Services\Impl\TaskServiceImpl;
use App\Services\TaskService;
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
        $this->app->singleton(
            TaskRepository::class,
            TaskRepositoryImpl::class
        );
        $this->app->singleton(
            TaskService::class,
            TaskServiceImpl::class
        );
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
