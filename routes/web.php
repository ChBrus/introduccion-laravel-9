<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Conceptos
 * * Route::get() Consultar
 * * Route::post() Guardar
 * * Route::put() Actualizar
 * * Route::delete() Eliminar
 */

Route::get('/', function () {
    return 'Ruta home';
});

Route::get('blog', function () {
    return 'Listado de publiocaciones';
});

Route::get('blog/{slug}', function ($slug) {
    // Consulta a Base de Datos

    return 'Publicación: ' . $slug;
})->where('slug', '[A-Za-z0-9\-]+');

Route::get('buscar', function (Request $request) {
    // dd($request->query('q'));
    // return 'Buscando: ' . $request->query('q');
    return $request->all();
})->name('buscar');