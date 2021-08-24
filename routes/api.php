<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 

}); */

//Rutas de productos
Route::get('/productos', 'ProductoController@index');
Route::get('/producto', 'ProductoController@show');
Route::post('/agregarProducto', 'ProductoController@create');

//Rutas de establecimientos
Route::get('/establecimientos','EstablecimientoController@index');
Route::get('/establecimiento','EstablecimientoController@show');

//Rutas de empleados
Route::get('/empleados', 'EmpleadosController@index');
Route::get('/empleado', 'EmpleadosController@show');
Route::post('/registrarEmpleado', 'EmpleadosController@store');
Route::put('/editarEmpleado', 'EmpleadosController@update');
Route::delete('eliminarEmpleado', 'EmpleadosController@destroy');