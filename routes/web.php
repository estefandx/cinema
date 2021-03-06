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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

//rutas para la tabla usuarios
Route::resource('pelicula', 'PeliculaController');

Route::get('/home', 'HomeController@index');

Route::get('/cartelera', 'PeliculaController@cartelera');



Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
    Route::get('accounts', 'AccountController@index');
    Route::post('dashboard', 'DashboardController@index');
});

