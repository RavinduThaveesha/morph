<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\EloquentRepositoryInterface;
use App\Contracts\ProfileRepositoryInterface;
use App\Contracts\FundamentalRepositoryInterface;
use App\Contracts\DriveRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ProfileRepository;
use App\Repositories\FundamentalRepository;
use App\Repositories\DriveRepository;

class RepositoriesServiceProvider extends ServiceProvider
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
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(FundamentalRepositoryInterface::class, FundamentalRepository::class);
        $this->app->bind(DriveRepositoryInterface::class, DriveRepository::class);
    }
}