<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para la página de servicios con parámetro opcional
Route::get('/servicios/{nombre?}', function ($nombre = null) {
    return view('services', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('servicios');

// Ruta para la página de proyectos con parámetro opcional
Route::get('/proyectos/{nombre?}', function ($nombre = null) {
    return view('projects', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('proyectos');

// Ruta para la página de clientes con parámetro opcional
Route::get('/clientes/{nombre?}', function ($nombre = null) {
    return view('customers', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('clientes');

// Ruta para la página de blog con parámetro opcional
Route::get('/blog/{id?}', function ($id = null) {
    return view('blogs', ['id' => $id]);
})->where('id', '[0-9]+')->name('blog');

// Ruta para la página de contacto
Route::get('/contacto', function () {
    return view('contacts');
})->name('contacto');
