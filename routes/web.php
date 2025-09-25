<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

   

  //  return view('welcome');



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
//COMENTO PARA OBSERVAR LOS CAMBIOS

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

/*
// DEFINICIÓN DE RUTAS PARA EL CRUD

//Ruta para mostrar el listado de registros
Route::get('/post', [PostController::class, 'index'])->name('post.index');

//Ruta para mostrar un formulario para crear un registro
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

//Ruta para guardar un registro
Route::post('/post', [PostController::class, 'store'])->name('post.store');

//Ruta para mostrar un registro
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

//Ruta para mostrar un formulario para editar un registro
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

//Ruta para actualizar un registro
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

//Ruta para eliminar un registro
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
*/
// DEFINICIÓN DE RUTAS PARA EL CRUD USANDO RESOURCE 
Route::resource('articulos', PostController::class)
->parameters(['articulos' => 'post'])
->names('post');

// ESTA LÍNEA SUSTITUYE A TODAS LAS ANTERIORES DEL CRUD
