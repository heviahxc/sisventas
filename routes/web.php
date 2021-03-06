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





Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contrasenas','ContrasenaController');
Route::resource('clientes','ClienteController');


Route::group(['middleware' => ['permission:reporte_productos|modificar_productos|crear_productos|darbaja_productos|reporte_categoria|crear_categoria|modificar_categoria|darbaja_categoria']], function () {
    Route::resource('productos','ProductoController');
    Route::resource('categorias','CategoriaController');
    Route::resource('despacho','DespachoController');
    
});

Route::group(['middleware' => ['permission:crear_empleado|modificar_empleado|darbaja_empleado']], function () {
    Route::resource('administradors','IngresoController');
    Route::get('cliente','IngresoController@cliente');
    

});
Route::group(['middleware' => ['permission:comprar_productos']], function () {
    Route::resource('seleccion','CarritoController');
    Route::resource('boleta','BoletaController');
    Route::get('carrito','CarritoController@carrito');
    
    
});