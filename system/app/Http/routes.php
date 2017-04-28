<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use SaleSystem\Product;
use SaleSystem\Fragrance;
Route::resource('cliente','ClienteController');
Route::get('/', ['middleware' => 'auth', function () {
    return view('salesystem.index');
}]);

Route::post('validar','ClienteController@validar');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::post('validar','MostrarController@validar');
route::get('ingresar-cliente','MostrarController@insertClient');
Route::get('ver-clientes','MostrarController@viewClients');
/*Route::get('admin/profile', ['middleware' => 'auth', function () {
    //
}]);*/