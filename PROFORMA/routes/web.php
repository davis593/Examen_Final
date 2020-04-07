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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
Route::get('/home','HomeController@index')->name('home');
/*Productos*/
  Route::post('/productos/search', ['as' => '/productos/search', 'uses'=>'ProductosController@search']);
  Route::get('/mproductos','ProductosController@index');
  Route::get('/productos','ProductosController@create');
  Route::post('/ingproducto','ProductosController@store');
  Route::get('/editarproducto/{producto}','ProductosController@edit');
  Route::patch('/actualizarproducto/{producto}','ProductosController@update');
  Route::delete('/eliminarproducto/{id}','ProductosController@destroy');
  Route::get('/mproductosE','ProductosController@only');
  Route::get('/restaurarproducto/{id}', ['as' =>  '/restaurarproducto', 'uses' => 'ProductosController@restore']);
/*Clientes*/
  Route::post('/clientes/search', ['as' => '/clientes/search', 'uses'=>'ClientesController@search']);
  Route::get('/mclientes','ClientesController@index');
  Route::get('/clientes','ClientesController@create');
  Route::post('/ingcliente','ClientesController@store');
  Route::get('/editarcliente/{cliente}','ClientesController@edit');
  Route::patch('/actualizarcliente/{cliente}','ClientesController@update');
  Route::delete('/eliminarcliente/{id}','ClientesController@destroy');
  Route::get('/mclientesE','ClientesController@only');
  Route::get('/restaurarcliente/{id}', ['as' =>  '/restaurarcliente', 'uses' => 'ClientesController@restore']);
/*Proveedores*/
  Route::post('/proveedores/search', ['as' => '/proveedores/search', 'uses'=>'ProveedoresController@search']);
  Route::get('/mproveedores','ProveedoresController@index');
  Route::get('/proveedores','ProveedoresController@create');
  Route::post('/ingproveedor','ProveedoresController@store');
  Route::get('/editarproveedor/{proveedor}','ProveedoresController@edit');
  Route::patch('/actualizarproveedor/{proveedor}','ProveedoresController@update');
  Route::delete('/eliminarproveedor/{id}','ProveedoresController@destroy');
  Route::get('/mproveedoresE','ProveedoresController@only');
  Route::get('/restaurarproveedor/{id}', ['as' =>  '/restaurarproveedor', 'uses' => 'ProveedoresController@restore']);
/*Usuarios*/
  Route::get('/musuarios','UsuariosController@index');
/*Facturas*/
  Route::get('/mfactura','FacturasController@index');
  Route::get('/factura','FacturasController@create');
  Route::post('/ingfactura','FacturasController@store');
  Route::delete('/eliminarfactura/{id}','FacturasController@destroy');
  Route::get('/mfacturasE','FacturasController@only');
  Route::get('/restaurarfactura/{id}', ['as' =>  '/restaurarfactuta', 'uses' => 'FacturasController@restore']);
  Route::get('/verfactura/{id}', 'FacturasController@verpdf');
  Route::get('/descargarfactura/{id}', 'FacturasController@pdf');
});
