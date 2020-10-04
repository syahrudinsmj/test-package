<?php

namespace Codeucok\Minicalculator;

use Illuminate\Support\ServiceProvider;

class MinicalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Codeucok\Minicalculator\Controllers\MiniCalculator');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';

    }
}
