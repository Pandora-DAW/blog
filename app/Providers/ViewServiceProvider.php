<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Este es un mensaje de prueba compartido en todas las vistas');

        /*

        View::composer(['welcome'], function ($view) {
            $view->with('prueba1', 'Este es un mensaje de prueba para todas las vistas');
        });
        */

        View::composer(['welcome'], CompanyComposer::class);
    }

}
