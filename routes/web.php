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

Route::group(['middleware' => 'web'], function(){

    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/aeroportos', 'Aeroporto@index')->name('aeroporto.index');
    Route::get('/aeroportos/create', 'Aeroporto@create')->name('aeroporto.create');
    Route::get('/aeroportos/{aeroporto}', 'Aeroporto@edite')->name('aeroporto.edite');
    Route::post('/aeroportos', 'Aeroporto@store')->name('aeroporto.store');
    Route::post('/aeroportos/{aeroporto}', 'Aeroporto@update')->name('aeroporto.update');

    Route::get('/aeronaves', 'Aeronave@index')->name('aeronave.index');
    Route::get('/aeronaves/create', 'Aeronave@create')->name('aeronave.create');
    Route::get('/aeronaves/{aeronave}', 'Aeronave@edite')->name('aeronave.edite');
    Route::post('/aeronaves', 'Aeronave@store')->name('aeronave.store');
    Route::post('/aeronaves/{aeronave}', 'Aeronave@update')->name('aeronave.update');

    Route::get('/voos', 'Voo@index')->name('voo.index');
    Route::get('/voos/create', 'Voo@create')->name('voo.create');
    Route::get('/voos/{voo}', 'Voo@edite')->name('voo.edite');
    Route::post('/voos', 'Voo@store')->name('voo.store');
    Route::post('/voos/{voo}', 'Voo@update')->name('voo.update');
});