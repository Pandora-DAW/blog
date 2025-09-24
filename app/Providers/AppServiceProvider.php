<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    // Definimos un patrón global para las rutas que usen {id}, de modo que solo acepten números
    // Esto afecta a todas las rutas que usen {id} en su definición
    // Si una ruta usa {id} y se le pasa un valor que no es numérico, Laravel devolverá un error 404 automáticamente
    // Esto es útil para evitar tener que validar manualmente en cada ruta que usa {id}
    // También mejora la seguridad al evitar inyecciones de código a través de la URL
    // Podemos definir otros patrones globales para otros parámetros de ruta si es necesario
    // Por ejemplo, podríamos definir un patrón para {slug} que solo acepte letras, números y guiones
    // Route::pattern('slug', '[a-zA-Z0-9-]+');
    // Esto se hace en el método boot
    // Recuerda que los patrones globales se aplican a todas las rutas que usan el mismo parámetro
    

    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');

    }
}
