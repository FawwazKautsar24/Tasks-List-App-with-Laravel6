<?php

namespace App\Providers;

use App\Subject;
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
        view()->composer(['tasks.partials.form', 'layouts.navigation'], function($view) {
            $view->with('subjects', Subject::all());
        });
    }
}
