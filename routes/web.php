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
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    echo "Vamos galOOo";
});

Route::get('/clientes','ClientesController@index');
Route::gett('/clientes','ClientesController@index');
Route::get('/usuarios','UsuariosController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
