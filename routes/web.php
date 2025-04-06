<?php

use Illuminate\Support\Facades\Route;

/**
 * Conceptos
 * * Route::get() Consultar
 * * Route::post() Guardar
 * * Route::put() Actualizar
 * * Route::delete() Eliminar
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    // Consulta a Base de Datos

    $posts = [
        [
            'id' => 1,
            'title' => 'PHP',
            'slug' => 'php',
        ],
        [
            'id' => 2,
            'title' => 'Laravel',
            'slug' => 'laravel',
        ],
        [
            'id' => 3,
            'title' => 'JavaScript',
            'slug' => 'javascript',
        ]
    ];

    return view('blog', [
        'posts' => $posts,
    ]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    // Consulta a Base de Datos
    $post = $slug;

    return view('post', [
        'post' => $post,
    ]);
})
    ->where('slug', '[A-Za-z0-9\-]+')
    ->name('post')
;