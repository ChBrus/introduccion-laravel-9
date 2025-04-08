<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/**
 * Conceptos
 * * Route::get() Consultar
 * * Route::post() Guardar
 * * Route::put() Actualizar
 * * Route::delete() Eliminar
 */

/**
 * * Forma corta para definir rutas
 */
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});