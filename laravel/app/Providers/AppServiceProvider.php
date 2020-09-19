<?php

namespace App\Providers;

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
        // added by Franklin Kemta
        // die(realpath('../public_html'));
        /*
        $this->app->bind('path.public', function() {
            return realpath('../public_html'); // return base_path().'/public_html';
        });
        */ 
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
