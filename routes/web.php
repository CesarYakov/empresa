<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
    //return 'Pantalla principal';
})->name('home');

Route::get('/services/{parameter?}', function ($parameter=null) {
    return view('services',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('services.index');

Route::get('/projects/{parameter?}', function ($parameter=null) {
    return view('projects',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('projects.index');

Route::get('/customers/{parameter?}', function ($parameter=null) {
    return view('customers',['parameter' => $parameter]);
})->where('parameter', '[A-Za-z]+')->name('customers.index');

Route::get('/blog/{parameter?}', function ($parameter=null) {
    return view('blogs',['parameter' => $parameter]);
})->where('parameter', '[0-9]+')->name('blogs.index');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts.index');
