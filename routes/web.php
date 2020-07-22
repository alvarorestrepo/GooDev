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
    return view('index');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

// Rutas para el slider principal
Route::get('/sliderprincipal', 'SliderprincipalController@index')->name('sliderprincipal.index');
Route::get('/sliderprincipal/create', 'SliderprincipalController@create')->name('sliderprincipal.create');


Route::get('/descubreservicios', 'DescubreservicioController@index')->name('descubreservicios.index');
