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
Route::post('/sliderprincipal', 'SliderprincipalController@store')->name('sliderprincipal.store');
Route::get('/sliderprincipal/{sliderprincipal}/edit', 'SliderprincipalController@edit')->name('sliderprincipal.edit');
Route::put('/sliderprincipal/{sliderprincipal}', 'SliderprincipalController@update')->name('sliderprincipal.update');
Route::delete('/sliderprincipal/{sliderprincipal}', 'SliderprincipalController@destroy')->name('sliderprincipal.destroy');
Route::get('/sliderprincipal/{sliderprincipal}', 'SliderprincipalController@show')->name('sliderprincipal.show');

// Rutas para Descubreservicios
Route::get('/descubreservicios', 'DescubreservicioController@index')->name('descubreservicios.index');

// Rutas para Categoriasskills
Route::get('/categoriaskill', 'CategoriaskillController@index')->name('categoriaskill.index');
Route::get('/categoriaskill/create', 'CategoriaskillController@create')->name('categoriaskill.create');
Route::post('/categoriaskill', 'CategoriaskillController@store')->name('categoriaskill.store');
Route::get('/categoriaskill/{categoriaskill}/edit', 'CategoriaskillController@edit')->name('categoriaskill.edit');
Route::put('/categoriaskill/{categoriaskill}', 'CategoriaskillController@update')->name('categoriaskill.update');
Route::delete('/categoriaskill/{categoriaskill}', 'CategoriaskillController@destroy')->name('categoriaskill.destroy');
Route::get('/categoriaskill/{categoriaskill}', 'CategoriaskillController@show')->name('categoriaskill.show');
