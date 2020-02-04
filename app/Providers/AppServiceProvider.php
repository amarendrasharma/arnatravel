<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('components.confirm', 'confirm');
        Blade::component('components.datatable', 'datatable');
        Blade::component('components.heading', 'heading');
        Blade::component('components.card', 'card');
        Blade::component('components.button', 'button');
    }
}
