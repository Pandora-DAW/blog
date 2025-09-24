<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "Hola desde la página de inicio";

  //  return view('welcome');
});


Route::get('/contacto', function () {

    return "Hola desde la página de contacto usando el método GET";

});

/* AQUÍ DEJA CONSTANCIA DE COMO UTILIZAR EL MÉTODO POST QUE NOS RECABARÍA INFORMACIÓN DE UN FORMULARIO, PERO DE MOMENTO NO LO VAMOS A USAR

Route::post('/contacto', function () {

    return "Hola desde la página de contacto usando el método POST";

});

ASÍ MISMO TAMBIÉN NOS MUESTRA COMO EMPLEAR VARIOS MÉTODOS EN UNA SOLA RUTA, PERO DE MOMENTO NO LO VAMOS A USAR, POR ESO LA DEJO COMENTADA Y NO LA ELIMINO, PARA QUE ME SIRVA DE APUNTES


Route::match(['get', 'post'], '/contacto', function () {

    return "Hola desde la página de contacto usando el método GET o POST";

});
*/
Route::get('cursos/informacion', function () {
  
    return "Aquí encontrarás toda la información de nuestros cursos";
});


Route::get('/cursos/{curso}', function ($curso) {

    return "Bienvenido al curso: $curso";
});

/* ESTA ES UNA EXPLICACIÓN DE COMO USAR VARIAS CONDICIONES EN UNA PETICIÓN
PERO VAMOS A USAR DE MOMENTO LA OPCIÓN ANTERIOR

Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso de la categoría: $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
});
*/
