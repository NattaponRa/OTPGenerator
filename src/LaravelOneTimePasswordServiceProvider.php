<?php

namespace nattaponra\laravelOneTimePassword;

use Illuminate\Support\ServiceProvider;

class LaravelOneTimePasswordServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');

         $this->publishes([__DIR__.'/config/config.php' => config_path('otp.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
