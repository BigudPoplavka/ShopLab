<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Thing;

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
        $count = count(Thing::all()->toArray());
        view()->share('count', $count);
    }
}
