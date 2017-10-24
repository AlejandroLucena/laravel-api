<?php

use Illuminate\Http\Request;
use App\Cliente;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\PassportController@login');
Route::group(['middleware' => 'auth:api'], function(){
	Route::post('register', 'API\PassportController@register');
	Route::post('get-details', 'API\PassportController@getDetails');
});
	
Route::get('clientes', 'ClienteController@index');

Route::get('clientes/{cliente}', 'ClienteController@show');
Route::post('clientes', 'ClienteController@store');
Route::put('clientes/{cliente}', 'ClienteController@update');
Route::delete('clientes/{cliente}', 'ClienteController@delete');
