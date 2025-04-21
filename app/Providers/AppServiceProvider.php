<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['website.includes.header', 'website.includes.footer', 'website.products.index'], function ($view) {
            $view->with('categories', Category::with('subCategories')->withCount('products')->get());
        });
    }
}
