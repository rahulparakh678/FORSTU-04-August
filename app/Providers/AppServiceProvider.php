<?php

namespace App\Providers;
use Schema;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        //
        /*
        Schema::defaultStringLength(191);
        if (env(key:'APP_ENV')!=='local') {
            // code...
            URL::forceScheme(scheme:'https');
        }*/
        if (env('APP_ENV')!=='local') {
            // code...
            URL::forceScheme('https');
        }
    }
}
