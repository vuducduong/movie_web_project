<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Country;
use Illuminate\Support\Facades\View;
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
        $countries = Country::all();
        $categories = Category::all();
        View::share('countries',$countries);
        View::share('categories',$categories);
    }
}
