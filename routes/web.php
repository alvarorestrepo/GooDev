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
Route::get('/descubreservicio', 'DescubreservicioController@index')->name('descubreservicio.index');
Route::get('/descubreservicio/create', 'DescubreservicioController@create')->name('descubreservicio.create');
Route::post('/descubreservicio', 'DescubreservicioController@store')->name('descubreservicio.store');
Route::get('/descubreservicio/{descubreservicio}/edit', 'DescubreservicioController@edit')->name('descubreservicio.edit');
Route::put('/descubreservicio/{descubreservicio}', 'DescubreservicioController@update')->name('descubreservicio.update');
Route::delete('/descubreservicio/{descubreservicio}', 'DescubreservicioController@destroy')->name('descubreservicio.destroy');
Route::get('/descubreservicio/{descubreservicio}', 'DescubreservicioController@show')->name('descubreservicio.show');

// Rutas para Categoriasskills
Route::get('/categoriaskill', 'CategoriaskillController@index')->name('categoriaskill.index');
Route::get('/categoriaskill/create', 'CategoriaskillController@create')->name('categoriaskill.create');
Route::post('/categoriaskill', 'CategoriaskillController@store')->name('categoriaskill.store');
Route::get('/categoriaskill/{categoriaskill}/edit', 'CategoriaskillController@edit')->name('categoriaskill.edit');
Route::put('/categoriaskill/{categoriaskill}', 'CategoriaskillController@update')->name('categoriaskill.update');
Route::delete('/categoriaskill/{categoriaskill}', 'CategoriaskillController@destroy')->name('categoriaskill.destroy');
Route::get('/categoriaskill/{categoriaskill}', 'CategoriaskillController@show')->name('categoriaskill.show');

// Rutas para Nuestrosskills
Route::get('/nuestrosskill','NuestrosskillController@index')->name('nuestrosskill.index');
Route::get('/nuestrosskill/create','NuestrosskillController@create')->name('nuestrosskill.create');
Route::post('/nuestrosskill','NuestrosskillController@store')->name('nuestrosskill.store');
Route::get('/nuestrosskill/{nuestrosskill}/edit','NuestrosskillController@edit')->name('nuestrosskill.edit');
Route::put('/nuestrosskill/{nuestrosskill}','NuestrosskillController@update')->name('nuestrosskill.update');
Route::delete('/nuestrosskill/{nuestrosskill}','NuestrosskillController@destroy')->name('nuestrosskill.destroy');
Route::get('/nuestrosskill/{nuestrosskill}','NuestrosskillController@show')->name('nuestrosskill.show');

// Rutas para Nuestrosskills
Route::get('/nuestraexperiencia','NuestraexperienciaController@index')->name('nuestraexperiencia.index');
Route::get('/nuestraexperiencia/create','NuestraexperienciaController@create')->name('nuestraexperiencia.create');
Route::post('/nuestraexperiencia','NuestraexperienciaController@store')->name('nuestraexperiencia.store');
Route::get('/nuestraexperiencia/{nuestraexperiencia}/edit','NuestraexperienciaController@edit')->name('nuestraexperiencia.edit');
Route::put('/nuestraexperiencia/{nuestraexperiencia}','NuestraexperienciaController@update')->name('nuestraexperiencia.update');
Route::delete('/nuestraexperiencia/{nuestraexperiencia}','NuestraexperienciaController@destroy')->name('nuestraexperiencia.destroy');
Route::get('/nuestraexperiencia/{nuestraexperiencia}','NuestraexperienciaController@show')->name('nuestraexperiencia.show');

// Rutas para Asociate
Route::get('/asociate','AsociateController@index')->name('asociate.index');
Route::get('/asociate/create','AsociateController@create')->name('asociate.create');
Route::post('/asociate','AsociateController@store')->name('asociate.store');
Route::get('/asociate/{asociate}/edit','AsociateController@edit')->name('asociate.edit');
Route::put('/asociate/{asociate}','AsociateController@update')->name('asociate.update');
Route::delete('/asociate/{asociate}','AsociateController@destroy')->name('asociate.destroy');
Route::get('/asociate/{asociate}','AsociateController@show')->name('asociate.show');
