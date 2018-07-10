<?php

namespace Abdou\Welcome;

use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //dd('hello friend');
        include __DIR__ . '/../routes/welcome.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'abdouwelcome');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
