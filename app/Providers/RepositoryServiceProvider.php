<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\{
    CategoryRepositoryInterface,
    ProductRepositoryInterface
};
use App\Repositories\Core\Eloquent\{
    EloquentCategoryRepository,
    EloquentProductRepository
};
use App\Repositories\Core\QueryBuilder\{
    QueryBuilderCategoryRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            EloquentProductRepository::class
        );

        $this->app->bind(
            CategoryRepositoryInterface::class,
            // QueryBuilderCategoryRepository::class
            EloquentCategoryRepository::class
        );
    }
}
