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

Route::post('login', 'API\V1\PassportController@login');

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1'], function(){
	Route::get('clientes', 'ClienteController@index');
	Route::get('clientes/{cliente}', 'ClienteController@show');
	Route::post('clientes', 'ClienteController@store');
	Route::put('clientes/{cliente}', 'ClienteController@update');
	Route::delete('clientes/delete/{cliente}', 'ClienteController@delete');

	Route::post('register', 'PassportController@register');
	Route::post('get-details', 'PassportController@getDetails');
});


Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('clientes', 'ClientesController', ['except' => ['create', 'edit']]);
});

	



