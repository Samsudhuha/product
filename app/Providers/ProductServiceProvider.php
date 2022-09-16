<?php

namespace App\Providers;

use App\Repositories\Contracts\ProductCategoryRepository;
use App\Repositories\Contracts\ProductRepository;
use App\Repositories\EloquentProductCategoryRepository;
use App\Repositories\EloquentProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public $bindings = [
        ProductCategoryRepository::class => EloquentProductCategoryRepository::class,
        ProductRepository::class => EloquentProductRepository::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
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
}
