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


Route::get('/','UsuarioController@index')->name('index');
Route::get('/mantenedores','PrincipalController@mantenedores')->name('mantenedores');
Route::resource('categorias','CategoriaController');
Route::resource('productos','ProductoController');
Route::resource('usuarios','UsuarioController');

