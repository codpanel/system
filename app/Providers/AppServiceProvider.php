<?php

namespace App\Providers;

use Facade\FlareClient\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('ALLPRODUCTS', \App\Product::all());
        view()->share('ALLCITIES', \App\Cities::all());
        view()->share('ALLEMPLOYEES', \App\User::where('role', 'employee')->get()->toArray());
        view()->share('ALLDELIVERS', \App\User::where('role', 'deliver')->get())->toArray();
    }
}