<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'ForumController@index');

Route::get('/hola', function () {
    return 'Hola';
});

Route::get('prueba/{edad?}', function($edad = 44){ 
    return "Mi edad es " . $edad; 
});

Route::get('controlador','PruebaController@index');

Route::get('name/{name}', 'PruebaController@nombre');

Route::resource('forum','Prueba2Controller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
